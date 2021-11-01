<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\UpdatePackingListsDetailRequest;
use App\Models\Wipsys\PackingListsDetail;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PackingListsDetailController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = PackingListsDetail::query()->select(sprintf('%s.*', (new PackingListsDetail)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'wipsys_show';
                $editGate      = 'wipsys_edit';
                $deleteGate    = 'wipsys_delete';
                $crudRoutePart = 'packing-lists-details';

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
            $table->editColumn('packing_list_number', function ($row) {
                return $row->packing_list_number ? $row->packing_list_number : "";
            });
            $table->editColumn('tag_number', function ($row) {
                return $row->tag_number ? $row->tag_number : "";
            });
            $table->editColumn('work_order_number', function ($row) {
                return $row->work_order_number ? $row->work_order_number : "";
            });
            $table->editColumn('part', function ($row) {
                return $row->part ? $row->part : "";
            });
            $table->editColumn('part_number', function ($row) {
                return $row->part_number ? $row->part_number : "";
            });
            $table->editColumn('customer_code', function ($row) {
                return $row->customer_code ? $row->customer_code : "";
            });
            $table->editColumn('destination_code', function ($row) {
                return $row->destination_code ? $row->destination_code : "";
            });
            $table->editColumn('process_code', function ($row) {
                return $row->process_code ? $row->process_code : "";
            });
            $table->editColumn('method_code', function ($row) {
                return $row->method_code ? $row->method_code : "";
            });
            $table->editColumn('customer_packing_list', function ($row) {
                return $row->customer_packing_list ? $row->customer_packing_list : "";
            });
            $table->editColumn('customer_purchase_order', function ($row) {
                return $row->customer_purchase_order ? $row->customer_purchase_order : "";
            });
            $table->editColumn('certification_number', function ($row) {
                return $row->certification_number ? $row->certification_number : "";
            });
            $table->editColumn('certify', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->certify ? 'checked' : null) . '>';
            });
            $table->editColumn('tag_quantity', function ($row) {
                return $row->tag_quantity ? $row->tag_quantity : "";
            });
            $table->editColumn('tag_quantity_shipped', function ($row) {
                return $row->tag_quantity_shipped ? $row->tag_quantity_shipped : "";
            });
            $table->editColumn('quantity', function ($row) {
                return $row->quantity ? $row->quantity : "";
            });
            $table->editColumn('shipped_amount', function ($row) {
                return $row->shipped_amount ? $row->shipped_amount : "";
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

            $table->rawColumns(['actions', 'placeholder', 'certify', 'archive']);

            return $table->make(true);
        }

        return view('admin.packingListsDetails.index');
    }

    public function edit(PackingListsDetail $packingListsDetail)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.packingListsDetails.edit', compact('packingListsDetail'));
    }

    public function update(UpdatePackingListsDetailRequest $request, PackingListsDetail $packingListsDetail)
    {
        $packingListsDetail->update($request->all());

        return redirect()->route('admin.packing-lists-details.index');
    }

    public function show(PackingListsDetail $packingListsDetail)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.packingListsDetails.show', compact('packingListsDetail'));
    }
}
