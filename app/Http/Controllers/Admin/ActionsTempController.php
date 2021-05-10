<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyActionsTempRequest;
use App\Http\Requests\StoreActionsTempRequest;
use App\Http\Requests\UpdateActionsTempRequest;
use App\Models\ActionsTemp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ActionsTempController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('actions_temp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ActionsTemp::query()->select(sprintf('%s.*', (new ActionsTemp)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'actions_temp_show';
                $editGate      = 'actions_temp_edit';
                $deleteGate    = 'actions_temp_delete';
                $crudRoutePart = 'actions-temps';

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
            $table->editColumn('i_dx', function ($row) {
                return $row->i_dx ? $row->i_dx : "";
            });
            $table->editColumn('record_name', function ($row) {
                return $row->record_name ? $row->record_name : "";
            });
            $table->editColumn('form_name', function ($row) {
                return $row->form_name ? $row->form_name : "";
            });
            $table->editColumn('value_name', function ($row) {
                return $row->value_name ? $row->value_name : "";
            });
            $table->editColumn('value', function ($row) {
                return $row->value ? $row->value : "";
            });

            $table->editColumn('complete', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->complete ? 'checked' : null) . '>';
            });
            $table->editColumn('rec_emp_code', function ($row) {
                return $row->rec_emp_code ? $row->rec_emp_code : "";
            });
            $table->editColumn('unit', function ($row) {
                return $row->unit ? $row->unit : "";
            });
            $table->editColumn('act_value', function ($row) {
                return $row->act_value ? $row->act_value : "";
            });
            $table->editColumn('scope_name', function ($row) {
                return $row->scope_name ? $row->scope_name : "";
            });
            $table->editColumn('comment', function ($row) {
                return $row->comment ? $row->comment : "";
            });
            $table->editColumn('tank', function ($row) {
                return $row->tank ? $row->tank : "";
            });

            $table->editColumn('emp_name', function ($row) {
                return $row->emp_name ? $row->emp_name : "";
            });
            $table->editColumn('i_dy', function ($row) {
                return $row->i_dy ? $row->i_dy : "";
            });
            $table->editColumn('value_num', function ($row) {
                return $row->value_num ? $row->value_num : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'complete']);

            return $table->make(true);
        }

        return view('admin.actionsTemps.index');
    }

    public function create()
    {
        abort_if(Gate::denies('actions_temp_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.actionsTemps.create');
    }

    public function store(StoreActionsTempRequest $request)
    {
        $actionsTemp = ActionsTemp::create($request->all());

        return redirect()->route('admin.actions-temps.index');
    }

    public function edit(ActionsTemp $actionsTemp)
    {
        abort_if(Gate::denies('actions_temp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.actionsTemps.edit', compact('actionsTemp'));
    }

    public function update(UpdateActionsTempRequest $request, ActionsTemp $actionsTemp)
    {
        $actionsTemp->update($request->all());

        return redirect()->route('admin.actions-temps.index');
    }

    public function show(ActionsTemp $actionsTemp)
    {
        abort_if(Gate::denies('actions_temp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.actionsTemps.show', compact('actionsTemp'));
    }

    public function destroy(ActionsTemp $actionsTemp)
    {
        abort_if(Gate::denies('actions_temp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $actionsTemp->delete();

        return back();
    }

    public function massDestroy(MassDestroyActionsTempRequest $request)
    {
        ActionsTemp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
