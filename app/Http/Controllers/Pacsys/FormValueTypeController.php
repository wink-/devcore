<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyFormValueTypeRequest;
use App\Http\Requests\Pacsys\StoreFormValueTypeRequest;
use App\Http\Requests\Pacsys\UpdateFormValueTypeRequest;
use App\Models\Pacsys\FormValueType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FormValueTypeController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('form_value_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = FormValueType::query()->select(sprintf('%s.*', (new FormValueType)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'form_value_type_show';
                $editGate      = 'form_value_type_edit';
                $deleteGate    = 'form_value_type_delete';
                $crudRoutePart = 'form-value-types';

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
            $table->editColumn('type_1', function ($row) {
                return $row->type_1 ? $row->type_1 : "";
            });
            $table->editColumn('type_2', function ($row) {
                return $row->type_2 ? $row->type_2 : "";
            });
            $table->editColumn('type_3', function ($row) {
                return $row->type_3 ? $row->type_3 : "";
            });
            $table->editColumn('type_4', function ($row) {
                return $row->type_4 ? $row->type_4 : "";
            });
            $table->editColumn('type_5', function ($row) {
                return $row->type_5 ? $row->type_5 : "";
            });
            $table->editColumn('type_6', function ($row) {
                return $row->type_6 ? $row->type_6 : "";
            });
            $table->editColumn('type_7', function ($row) {
                return $row->type_7 ? $row->type_7 : "";
            });
            $table->editColumn('type_8', function ($row) {
                return $row->type_8 ? $row->type_8 : "";
            });
            $table->editColumn('type_9', function ($row) {
                return $row->type_9 ? $row->type_9 : "";
            });
            $table->editColumn('type_10', function ($row) {
                return $row->type_10 ? $row->type_10 : "";
            });
            $table->editColumn('type_11', function ($row) {
                return $row->type_11 ? $row->type_11 : "";
            });
            $table->editColumn('type_12', function ($row) {
                return $row->type_12 ? $row->type_12 : "";
            });
            $table->editColumn('type_13', function ($row) {
                return $row->type_13 ? $row->type_13 : "";
            });
            $table->editColumn('type_14', function ($row) {
                return $row->type_14 ? $row->type_14 : "";
            });
            $table->editColumn('type_15', function ($row) {
                return $row->type_15 ? $row->type_15 : "";
            });
            $table->editColumn('type_16', function ($row) {
                return $row->type_16 ? $row->type_16 : "";
            });
            $table->editColumn('type_17', function ($row) {
                return $row->type_17 ? $row->type_17 : "";
            });
            $table->editColumn('type_18', function ($row) {
                return $row->type_18 ? $row->type_18 : "";
            });
            $table->editColumn('type_19', function ($row) {
                return $row->type_19 ? $row->type_19 : "";
            });
            $table->editColumn('type_20', function ($row) {
                return $row->type_20 ? $row->type_20 : "";
            });
            $table->editColumn('tank', function ($row) {
                return $row->tank ? $row->tank : "";
            });

            $table->editColumn('false', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->false ? 'checked' : null) . '>';
            });
            $table->editColumn('true', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->true ? 'checked' : null) . '>';
            });

            $table->rawColumns(['actions', 'placeholder', 'false', 'true']);

            return $table->make(true);
        }

        return view('pacsys.formValueTypes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('form_value_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueTypes.create');
    }

    public function store(StoreFormValueTypeRequest $request)
    {
        $formValueType = FormValueType::create($request->all());

        return redirect()->route('pacsys.form-value-types.index');
    }

    public function edit(FormValueType $formValueType)
    {
        abort_if(Gate::denies('form_value_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueTypes.edit', compact('formValueType'));
    }

    public function update(UpdateFormValueTypeRequest $request, FormValueType $formValueType)
    {
        $formValueType->update($request->all());

        return redirect()->route('pacsys.form-value-types.index');
    }

    public function show(FormValueType $formValueType)
    {
        abort_if(Gate::denies('form_value_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueTypes.show', compact('formValueType'));
    }

    public function destroy(FormValueType $formValueType)
    {
        abort_if(Gate::denies('form_value_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueType->delete();

        return back();
    }

    public function massDestroy(MassDestroyFormValueTypeRequest $request)
    {
        FormValueType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
