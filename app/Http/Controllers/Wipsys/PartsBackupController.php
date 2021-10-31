<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePartsBackupRequest;
use App\Models\Wipsys\PartsBackup;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PartsBackupController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('parts_backup_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = PartsBackup::query()->select(sprintf('%s.*', (new PartsBackup)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'parts_backup_show';
                $editGate      = 'parts_backup_edit';
                $deleteGate    = 'parts_backup_delete';
                $crudRoutePart = 'parts-backups';

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
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });
            $table->editColumn('customer_code', function ($row) {
                return $row->customer_code ? $row->customer_code : "";
            });
            $table->editColumn('customer_name', function ($row) {
                return $row->customer_name ? $row->customer_name : "";
            });
            $table->editColumn('process_code', function ($row) {
                return $row->process_code ? $row->process_code : "";
            });
            $table->editColumn('price', function ($row) {
                return $row->price ? $row->price : "";
            });
            $table->editColumn('minimum_lot_charge', function ($row) {
                return $row->minimum_lot_charge ? $row->minimum_lot_charge : "";
            });
            $table->editColumn('quote', function ($row) {
                return $row->quote ? $row->quote : "";
            });
            $table->editColumn('specification', function ($row) {
                return $row->specification ? $row->specification : "";
            });
            $table->editColumn('procedure_code', function ($row) {
                return $row->procedure_code ? $row->procedure_code : "";
            });
            $table->editColumn('operator_note', function ($row) {
                return $row->operator_note ? $row->operator_note : "";
            });
            $table->editColumn('number', function ($row) {
                return $row->number ? $row->number : "";
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });
            $table->editColumn('customer_code', function ($row) {
                return $row->customer_code ? $row->customer_code : "";
            });
            $table->editColumn('customer_name', function ($row) {
                return $row->customer_name ? $row->customer_name : "";
            });
            $table->editColumn('process_code', function ($row) {
                return $row->process_code ? $row->process_code : "";
            });
            $table->editColumn('price', function ($row) {
                return $row->price ? $row->price : "";
            });
            $table->editColumn('minimum_lot_charge', function ($row) {
                return $row->minimum_lot_charge ? $row->minimum_lot_charge : "";
            });
            $table->editColumn('quote', function ($row) {
                return $row->quote ? $row->quote : "";
            });
            $table->editColumn('specification', function ($row) {
                return $row->specification ? $row->specification : "";
            });
            $table->editColumn('procedure_code', function ($row) {
                return $row->procedure_code ? $row->procedure_code : "";
            });
            $table->editColumn('operator_note', function ($row) {
                return $row->operator_note ? $row->operator_note : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.partsBackups.index');
    }

    public function edit(PartsBackup $partsBackup)
    {
        abort_if(Gate::denies('parts_backup_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.partsBackups.edit', compact('partsBackup'));
    }

    public function update(UpdatePartsBackupRequest $request, PartsBackup $partsBackup)
    {
        $partsBackup->update($request->all());

        return redirect()->route('admin.parts-backups.index');
    }

    public function show(PartsBackup $partsBackup)
    {
        abort_if(Gate::denies('parts_backup_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.partsBackups.show', compact('partsBackup'));
    }
}
