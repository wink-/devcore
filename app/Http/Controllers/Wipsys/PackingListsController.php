<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackingListRequest;
use App\Http\Requests\UpdatePackingListRequest;
use App\Models\Wipsys\PackingList;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PackingListsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = PackingList::query()->select(sprintf('%s.*', (new PackingList)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'wipsys_show';
                $editGate      = 'wipsys_edit';
                $deleteGate    = 'wipsys_delete';
                $crudRoutePart = 'packing-lists';

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

            $table->editColumn('employee_code', function ($row) {
                return $row->employee_code ? $row->employee_code : "";
            });
            $table->editColumn('user_code', function ($row) {
                return $row->user_code ? $row->user_code : "";
            });
            $table->editColumn('customer_code', function ($row) {
                return $row->customer_code ? $row->customer_code : "";
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
            $table->editColumn('customer_purchase_order', function ($row) {
                return $row->customer_purchase_order ? $row->customer_purchase_order : "";
            });
            $table->editColumn('cod', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->cod ? 'checked' : null) . '>';
            });

            $table->editColumn('printed', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->printed ? 'checked' : null) . '>';
            });
            $table->editColumn('session', function ($row) {
                return $row->session ? $row->session : "";
            });
            $table->editColumn('archive', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->archive ? 'checked' : null) . '>';
            });
            $table->editColumn('revision', function ($row) {
                return $row->revision ? $row->revision : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'cod', 'printed', 'archive']);

            return $table->make(true);
        }

        return view('admin.packingLists.index');
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.packingLists.create');
    }

    public function store(StorePackingListRequest $request)
    {
        $packingList = PackingList::create($request->all());

        return redirect()->route('admin.packing-lists.index');
    }

    public function edit(PackingList $packingList)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.packingLists.edit', compact('packingList'));
    }

    public function update(UpdatePackingListRequest $request, PackingList $packingList)
    {
        $packingList->update($request->all());

        return redirect()->route('admin.packing-lists.index');
    }

    public function show(PackingList $packingList)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.packingLists.show', compact('packingList'));
    }
}
