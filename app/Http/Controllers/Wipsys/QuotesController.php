<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\MassDestroyQuoteRequest;
use App\Http\Requests\Wipsys\StoreQuoteRequest;
use App\Http\Requests\Wipsys\UpdateQuoteRequest;
use App\Models\Wipsys\Contact;
use App\Models\Wipsys\Customer;
use App\Models\Wipsys\Process;
use App\Models\Wipsys\Quote;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class QuotesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Quote::with(['customer', 'contact', 'process', 'user'])->select(sprintf('%s.*', (new Quote())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'wipsys_access';
                $editGate = 'wipsys_edit';
                $deleteGate = 'wipsys_delete';
                $crudRoutePart = 'quotes';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->addColumn('customer_code', function ($row) {
                return $row->customer ? $row->customer->code : '';
            });

            $table->editColumn('customer.name', function ($row) {
                return $row->customer ? (is_string($row->customer) ? $row->customer : $row->customer->name) : '';
            });
            $table->editColumn('customer_code', function ($row) {
                return $row->customer_code ? $row->customer_code : '';
            });
            $table->editColumn('customer_name', function ($row) {
                return $row->customer_name ? $row->customer_name : '';
            });
            $table->addColumn('contact_first_name', function ($row) {
                return $row->contact ? $row->contact->first_name : '';
            });

            $table->editColumn('contact.last_name', function ($row) {
                return $row->contact ? (is_string($row->contact) ? $row->contact : $row->contact->last_name) : '';
            });
            $table->editColumn('part_number', function ($row) {
                return $row->part_number ? $row->part_number : '';
            });
            $table->editColumn('revision_code', function ($row) {
                return $row->revision_code ? $row->revision_code : '';
            });
            $table->editColumn('customer_rfq', function ($row) {
                return $row->customer_rfq ? $row->customer_rfq : '';
            });
            $table->editColumn('part_description', function ($row) {
                return $row->part_description ? $row->part_description : '';
            });
            $table->editColumn('specification', function ($row) {
                return $row->specification ? $row->specification : '';
            });
            $table->editColumn('material', function ($row) {
                return $row->material ? $row->material : '';
            });
            $table->addColumn('process_code', function ($row) {
                return $row->process ? $row->process->code : '';
            });

            $table->editColumn('process.name', function ($row) {
                return $row->process ? (is_string($row->process) ? $row->process : $row->process->name) : '';
            });
            $table->editColumn('method_code', function ($row) {
                return $row->method_code ? $row->method_code : '';
            });
            $table->editColumn('method', function ($row) {
                return $row->method ? $row->method : '';
            });
            $table->editColumn('quantity_minimum', function ($row) {
                return $row->quantity_minimum ? $row->quantity_minimum : '';
            });
            $table->editColumn('quantity_maximum', function ($row) {
                return $row->quantity_maximum ? $row->quantity_maximum : '';
            });
            $table->editColumn('price', function ($row) {
                return $row->price ? $row->price : '';
            });
            $table->editColumn('units', function ($row) {
                return $row->units ? $row->units : '';
            });
            $table->editColumn('minimum_lot_charge', function ($row) {
                return $row->minimum_lot_charge ? $row->minimum_lot_charge : '';
            });
            $table->editColumn('surface_area', function ($row) {
                return $row->surface_area ? $row->surface_area : '';
            });
            $table->editColumn('thickness_minimum', function ($row) {
                return $row->thickness_minimum ? $row->thickness_minimum : '';
            });
            $table->editColumn('thickness_maximum', function ($row) {
                return $row->thickness_maximum ? $row->thickness_maximum : '';
            });
            $table->editColumn('baking', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->baking ? 'checked' : null) . '>';
            });
            $table->editColumn('baking_time_pre', function ($row) {
                return $row->baking_time_pre ? $row->baking_time_pre : '';
            });
            $table->editColumn('baking_temp_pre', function ($row) {
                return $row->baking_temp_pre ? $row->baking_temp_pre : '';
            });
            $table->editColumn('baking_time_post', function ($row) {
                return $row->baking_time_post ? $row->baking_time_post : '';
            });
            $table->editColumn('baking_temp_post', function ($row) {
                return $row->baking_temp_post ? $row->baking_temp_post : '';
            });
            $table->editColumn('bake_notes', function ($row) {
                return $row->bake_notes ? $row->bake_notes : '';
            });
            $table->editColumn('blasting', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->blasting ? 'checked' : null) . '>';
            });
            $table->editColumn('blast_notes', function ($row) {
                return $row->blast_notes ? $row->blast_notes : '';
            });
            $table->editColumn('masking', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->masking ? 'checked' : null) . '>';
            });
            $table->editColumn('mask_notes', function ($row) {
                return $row->mask_notes ? $row->mask_notes : '';
            });
            $table->editColumn('testing', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->testing ? 'checked' : null) . '>';
            });
            $table->editColumn('test_notes', function ($row) {
                return $row->test_notes ? $row->test_notes : '';
            });
            $table->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->name : '';
            });

            $table->editColumn('value_min', function ($row) {
                return $row->value_min ? $row->value_min : '';
            });
            $table->editColumn('value_max', function ($row) {
                return $row->value_max ? $row->value_max : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'customer', 'contact', 'process', 'baking', 'blasting', 'masking', 'testing', 'user']);

            return $table->make(true);
        }

        $customers = Customer::get();
        $contacts  = Contact::get();
        $processes = Process::get();
        $users     = User::get();

        return view('admin.quotes.index', compact('customers', 'contacts', 'processes', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::all()->pluck('code', 'id')->prepend('Please Select', '');

        $contacts = Contact::all()->pluck('first_name', 'id')->prepend('Please Select', '');

        $processes = Process::all()->pluck('code', 'id')->prepend('Please Select', '');

        $users = User::all()->pluck('name', 'id')->prepend('Please Select', '');

        return view('admin.quotes.create', compact('customers', 'contacts', 'processes', 'users'));
    }

    public function store(StoreQuoteRequest $request)
    {
        $quote = Quote::create($request->all());

        return redirect()->route('admin.quotes.index');
    }

    public function edit(Quote $quote)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::all()->pluck('code', 'id')->prepend('Please Select', '');

        $contacts = Contact::all()->pluck('first_name', 'id')->prepend('Please Select', '');

        $processes = Process::all()->pluck('code', 'id')->prepend('Please Select', '');

        $users = User::all()->pluck('name', 'id')->prepend('Please Select', '');

        $quote->load('customer', 'contact', 'process', 'user');

        return view('admin.quotes.edit', compact('customers', 'contacts', 'processes', 'users', 'quote'));
    }

    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        $quote->update($request->all());

        return redirect()->route('admin.quotes.index');
    }

    public function show(Quote $quote)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $quote->load('customer', 'contact', 'process', 'user');

        return view('admin.quotes.show', compact('quote'));
    }

    public function destroy(Quote $quote)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $quote->delete();

        return back();
    }

    public function massDestroy(MassDestroyQuoteRequest $request)
    {
        Quote::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
