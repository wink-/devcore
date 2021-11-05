<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyActionRequest;
use App\Http\Requests\Pacsys\StoreActionRequest;
use App\Http\Requests\Pacsys\UpdateActionRequest;
use App\Models\Pacsys\Pacsys\Action;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ActionsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('pacsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Action::query()->select(sprintf('%s.*', (new Action)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'pacsys_access';
                $editGate      = 'pacsys_edit';
                $deleteGate    = 'pacsys_delete';
                $crudRoutePart = 'actions';

                return view('partials.pacsysDatatablesActions', compact(
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

        return view('pacsys.actions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('pacsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.actions.create');
    }

    public function store(StoreActionRequest $request)
    {
        $action = Action::create($request->all());

        return redirect()->route('pacsys.actions.index');
    }

    public function edit(Action $action)
    {
        abort_if(Gate::denies('pacsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.actions.edit', compact('action'));
    }

    public function update(UpdateActionRequest $request, Action $action)
    {
        $action->update($request->all());

        return redirect()->route('pacsys.actions.index');
    }

    public function show(Action $action)
    {
        abort_if(Gate::denies('pacsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.actions.show', compact('action'));
    }

    public function destroy(Action $action)
    {
        abort_if(Gate::denies('pacsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $action->delete();

        return back();
    }

    public function massDestroy(MassDestroyActionRequest $request)
    {
        Action::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
