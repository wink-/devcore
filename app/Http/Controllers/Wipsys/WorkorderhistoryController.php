<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreWorkorderhistoryRequest;
use App\Http\Requests\Wipsys\UpdateWorkorderhistoryRequest;
use App\Models\Wipsys\Part;
use App\Models\Wipsys\Workorderhistory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class WorkorderhistoryController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Workorderhistory::with(['part'])->select(sprintf('%s.*', (new Workorderhistory)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'wipsys_show';
                $editGate      = 'wipsys_edit';
                $deleteGate    = 'wipsys_delete';
                $crudRoutePart = 'workorderhistories';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('number', function ($row) {
                return $row->number ? $row->number : "";
            });
            $table->editColumn('customer_code', function ($row) {
                return $row->customer_code ? $row->customer_code : "";
            });
            $table->editColumn('customer_name', function ($row) {
                return $row->customer_name ? $row->customer_name : "";
            });
            $table->addColumn('part_number', function ($row) {
                return $row->part ? $row->part->number : '';
            });

            $table->editColumn('part_number', function ($row) {
                return $row->part_number ? $row->part_number : "";
            });
            $table->editColumn('process_code', function ($row) {
                return $row->process_code ? $row->process_code : "";
            });
            $table->editColumn('price', function ($row) {
                return $row->price ? $row->price : "";
            });
            $table->editColumn('price_code', function ($row) {
                return $row->price_code ? $row->price_code : "";
            });

            $table->editColumn('customer_purchase_order', function ($row) {
                return $row->customer_purchase_order ? $row->customer_purchase_order : "";
            });
            $table->editColumn('customer_packing_list', function ($row) {
                return $row->customer_packing_list ? $row->customer_packing_list : "";
            });
            $table->editColumn('quantity', function ($row) {
                return $row->quantity ? $row->quantity : "";
            });
            $table->editColumn('unit_code', function ($row) {
                return $row->unit_code ? $row->unit_code : "";
            });
            $table->editColumn('quantity_shipped', function ($row) {
                return $row->quantity_shipped ? $row->quantity_shipped : "";
            });
            $table->editColumn('our_last_packing_list', function ($row) {
                return $row->our_last_packing_list ? $row->our_last_packing_list : "";
            });
            $table->editColumn('destination_code', function ($row) {
                return $row->destination_code ? $row->destination_code : "";
            });
            $table->editColumn('carrier_code', function ($row) {
                return $row->carrier_code ? $row->carrier_code : "";
            });
            $table->editColumn('freight_code', function ($row) {
                return $row->freight_code ? $row->freight_code : "";
            });

            $table->editColumn('invoice_number', function ($row) {
                return $row->invoice_number ? $row->invoice_number : "";
            });

            $table->editColumn('invoice_amount', function ($row) {
                return $row->invoice_amount ? $row->invoice_amount : "";
            });
            $table->editColumn('priority', function ($row) {
                return $row->priority ? $row->priority : "";
            });
            $table->editColumn('rework', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->rework ? 'checked' : null) . '>';
            });
            $table->editColumn('hot', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->hot ? 'checked' : null) . '>';
            });
            $table->editColumn('started', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->started ? 'checked' : null) . '>';
            });
            $table->editColumn('completed', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->completed ? 'checked' : null) . '>';
            });
            $table->editColumn('shipped', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->shipped ? 'checked' : null) . '>';
            });
            $table->editColumn('cod', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->cod ? 'checked' : null) . '>';
            });
            $table->editColumn('invoiced', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->invoiced ? 'checked' : null) . '>';
            });

            $table->rawColumns(['actions', 'placeholder', 'part', 'rework', 'hot', 'started', 'completed', 'shipped', 'cod', 'invoiced']);

            return $table->make(true);
        }

        $parts = Part::get();

        return view('wipsys.workorderhistories.index', compact('parts'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parts = Part::all()->pluck('number', 'id')->prepend('Please Select', '');

        return view('wipsys.workorderhistories.create', compact('parts'));
    }

    public function store(StoreWorkorderhistoryRequest $request)
    {
        $workorderhistory = Workorderhistory::create($request->all());

        return redirect()->route('wipsys.workorderhistories.index');
    }

    public function edit(Workorderhistory $workorderhistory)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parts = Part::all()->pluck('number', 'id')->prepend('Please Select', '');

        $workorderhistory->load('part');

        return view('wipsys.workorderhistories.edit', compact('parts', 'workorderhistory'));
    }

    public function update(UpdateWorkorderhistoryRequest $request, Workorderhistory $workorderhistory)
    {
        $workorderhistory->update($request->all());

        return redirect()->route('wipsys.workorderhistories.index');
    }

    public function show(Workorderhistory $workorderhistory)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workorderhistory->load('part');

        return view('wipsys.workorderhistories.show', compact('workorderhistory'));
    }
}
