<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Models\Wipsys\Ups;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class UpsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Up::query()->select(sprintf('%s.*', (new Up)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'wipsys_show';
                $editGate      = 'wipsys_edit';
                $deleteGate    = 'wipsys_delete';
                $crudRoutePart = 'ups';

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
            $table->editColumn('tracking_number', function ($row) {
                return $row->tracking_number ? $row->tracking_number : "";
            });
            $table->editColumn('receiver_name', function ($row) {
                return $row->receiver_name ? $row->receiver_name : "";
            });
            $table->editColumn('shipment_process_timestamp', function ($row) {
                return $row->shipment_process_timestamp ? $row->shipment_process_timestamp : "";
            });
            $table->editColumn('service_type', function ($row) {
                return $row->service_type ? $row->service_type : "";
            });
            $table->editColumn('weight', function ($row) {
                return $row->weight ? $row->weight : "";
            });
            $table->editColumn('ref_1', function ($row) {
                return $row->ref_1 ? $row->ref_1 : "";
            });
            $table->editColumn('ref_2', function ($row) {
                return $row->ref_2 ? $row->ref_2 : "";
            });
            $table->editColumn('ref_3', function ($row) {
                return $row->ref_3 ? $row->ref_3 : "";
            });
            $table->editColumn('ref_4', function ($row) {
                return $row->ref_4 ? $row->ref_4 : "";
            });
            $table->editColumn('ref_5', function ($row) {
                return $row->ref_5 ? $row->ref_5 : "";
            });
            $table->editColumn('archive', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->archive ? 'checked' : null) . '>';
            });
            $table->editColumn('revision', function ($row) {
                return $row->revision ? $row->revision : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'archive']);

            return $table->make(true);
        }

        return view('admin.ups.index');
    }

    public function show(Up $up)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ups.show', compact('up'));
    }
}
