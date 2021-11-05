<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyFormValueActionRequest;
use App\Http\Requests\Pacsys\StoreFormValueActionRequest;
use App\Http\Requests\Pacsys\UpdateFormValueActionRequest;
use App\Models\Pacsys\Pacsys\FormValueAction;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FormValueActionController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('form_value_action_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = FormValueAction::query()->select(sprintf('%s.*', (new FormValueAction)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'form_value_action_show';
                $editGate      = 'form_value_action_edit';
                $deleteGate    = 'form_value_action_delete';
                $crudRoutePart = 'form-value-actions';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('form_name', function ($row) {
                return $row->form_name ? $row->form_name : "";
            });
            $table->editColumn('action_1', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_1 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_2', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_2 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_3', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_3 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_4', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_4 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_5', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_5 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_6', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_6 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_7', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_7 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_8', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_8 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_9', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_9 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_10', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_10 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_11', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_11 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_12', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_12 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_13', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_13 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_14', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_14 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_15', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_15 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_16', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_16 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_17', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_17 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_18', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_18 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_19', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_19 ? 'checked' : null) . '>';
            });
            $table->editColumn('action_20', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->action_20 ? 'checked' : null) . '>';
            });
            $table->editColumn('tank', function ($row) {
                return $row->tank ? $row->tank : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'action_1', 'action_2', 'action_3', 'action_4', 'action_5', 'action_6', 'action_7', 'action_8', 'action_9', 'action_10', 'action_11', 'action_12', 'action_13', 'action_14', 'action_15', 'action_16', 'action_17', 'action_18', 'action_19', 'action_20']);

            return $table->make(true);
        }

        return view('pacsys.formValueActions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('form_value_action_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueActions.create');
    }

    public function store(StoreFormValueActionRequest $request)
    {
        $formValueAction = FormValueAction::create($request->all());

        return redirect()->route('pacsys.form-value-actions.index');
    }

    public function edit(FormValueAction $formValueAction)
    {
        abort_if(Gate::denies('form_value_action_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueActions.edit', compact('formValueAction'));
    }

    public function update(UpdateFormValueActionRequest $request, FormValueAction $formValueAction)
    {
        $formValueAction->update($request->all());

        return redirect()->route('pacsys.form-value-actions.index');
    }

    public function show(FormValueAction $formValueAction)
    {
        abort_if(Gate::denies('form_value_action_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueActions.show', compact('formValueAction'));
    }

    public function destroy(FormValueAction $formValueAction)
    {
        abort_if(Gate::denies('form_value_action_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueAction->delete();

        return back();
    }

    public function massDestroy(MassDestroyFormValueActionRequest $request)
    {
        FormValueAction::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
