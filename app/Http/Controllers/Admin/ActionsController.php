<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyActionRequest;
use App\Http\Requests\StoreActionRequest;
use App\Http\Requests\UpdateActionRequest;
use App\Models\Action;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ActionsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('action_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Action::query()->select(sprintf('%s.*', (new Action)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'action_show';
                $editGate      = 'action_edit';
                $deleteGate    = 'action_delete';
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

        return view('admin.actions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('action_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.actions.create');
    }

    public function store(StoreActionRequest $request)
    {
        $action = Action::create($request->all());

        return redirect()->route('admin.actions.index');
    }

    public function edit(Action $action)
    {
        abort_if(Gate::denies('action_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.actions.edit', compact('action'));
    }

    public function update(UpdateActionRequest $request, Action $action)
    {
        $action->update($request->all());

        return redirect()->route('admin.actions.index');
    }

    public function show(Action $action)
    {
        abort_if(Gate::denies('action_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.actions.show', compact('action'));
    }

    public function destroy(Action $action)
    {
        abort_if(Gate::denies('action_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $action->delete();

        return back();
    }

    public function massDestroy(MassDestroyActionRequest $request)
    {
        Action::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
