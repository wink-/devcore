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
        abort_if(Gate::denies('pacsys'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ActionsTemp::query()->select(sprintf('%s.*', (new ActionsTemp)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'pacsys';
                $editGate      = 'pacsys_edit';
                $deleteGate    = 'pacsys_delete';
                $crudRoutePart = 'actions';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->getKey() ? $row->getKey() : "";
            });
            $table->editColumn('IDx', function ($row) {
                return $row->IDx ? $row->IDx : "";
            });
            $table->editColumn('RecordName', function ($row) {
                return $row->RecordName ? $row->RecordName : "";
            });
            $table->editColumn('FormName', function ($row) {
                return $row->FormName ? $row->FormName : "";
            });
            $table->editColumn('ValueName', function ($row) {
                return $row->ValueName ? $row->ValueName : "";
            });
            $table->editColumn('Value', function ($row) {
                return $row->Value ? $row->Value : "";
            });
            $table->editColumn('RecDate', function ($row) {
                return $row->RecDate ? $row->RecDate : "";
            });
            $table->editColumn('Complete', function ($row) {
                //return '<input type="checkbox" disabled ' . ($row->Complete ? 'checked' : null) . '>';
                return $row->Complete ? $row->Complete : "";
            });
            $table->editColumn('RecEmpCode', function ($row) {
                return $row->RecEmpCode ? $row->RecEmpCode : "";
            });
            $table->editColumn('Unit', function ($row) {
                return $row->Unit ? $row->Unit : "";
            });
            $table->editColumn('ActValue', function ($row) {
                return $row->ActValue ? $row->ActValue : "";
            });
            $table->editColumn('ScopeName', function ($row) {
                return $row->ScopeName ? $row->ScopeName : "";
            });
            $table->editColumn('Comment', function ($row) {
                return $row->Comment ? $row->Comment : "";
            });
            $table->editColumn('Tank', function ($row) {
                return $row->Tank ? $row->Tank : "";
            });

            $table->editColumn('EmpName', function ($row) {
                return $row->EmpName ? $row->EmpName : "";
            });
            $table->editColumn('IDy', function ($row) {
                return $row->IDy ? $row->IDy : "";
            });
            $table->editColumn('ValueNum', function ($row) {
                return $row->ValueNum ? $row->ValueNum : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'complete']);

            return $table->make(true);
        }

        return view('admin.actionsTemps.index');
    }

    public function create()
    {
        abort_if(Gate::denies('pacsys'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.actionsTemps.create');
    }

    public function store(StoreActionsTempRequest $request)
    {
        $actionsTemp = ActionsTemp::create($request->all());

        return redirect()->route('admin.actions-temps.index');
    }

    public function edit(ActionsTemp $actionsTemp)
    {
        abort_if(Gate::denies('pacsys'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.actionsTemps.edit', compact('actionsTemp'));
    }

    public function update(UpdateActionsTempRequest $request, ActionsTemp $actionsTemp)
    {
        $actionsTemp->update($request->all());

        return redirect()->route('admin.actions-temps.index');
    }

    public function show(ActionsTemp $actionsTemp)
    {
        abort_if(Gate::denies('pacsys'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.actionsTemps.show', compact('actionsTemp'));
    }

    public function destroy(ActionsTemp $actionsTemp)
    {
        abort_if(Gate::denies('pacsys'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $actionsTemp->delete();

        return back();
    }

    public function massDestroy(MassDestroyActionsTempRequest $request)
    {
        ActionsTemp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
