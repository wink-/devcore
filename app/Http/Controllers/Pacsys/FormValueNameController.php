<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyFormValueNameRequest;
use App\Http\Requests\Pacsys\StoreFormValueNameRequest;
use App\Http\Requests\Pacsys\UpdateFormValueNameRequest;
use App\Models\Pacsys\FormValueName;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FormValueNameController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('form_value_name_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = FormValueName::query()->select(sprintf('%s.*', (new FormValueName)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'form_value_name_show';
                $editGate      = 'form_value_name_edit';
                $deleteGate    = 'form_value_name_delete';
                $crudRoutePart = 'form-value-names';

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
            $table->editColumn('name_1', function ($row) {
                return $row->name_1 ? $row->name_1 : "";
            });
            $table->editColumn('name_2', function ($row) {
                return $row->name_2 ? $row->name_2 : "";
            });
            $table->editColumn('name_3', function ($row) {
                return $row->name_3 ? $row->name_3 : "";
            });
            $table->editColumn('name_4', function ($row) {
                return $row->name_4 ? $row->name_4 : "";
            });
            $table->editColumn('name_5', function ($row) {
                return $row->name_5 ? $row->name_5 : "";
            });
            $table->editColumn('name_6', function ($row) {
                return $row->name_6 ? $row->name_6 : "";
            });
            $table->editColumn('name_7', function ($row) {
                return $row->name_7 ? $row->name_7 : "";
            });
            $table->editColumn('name_8', function ($row) {
                return $row->name_8 ? $row->name_8 : "";
            });
            $table->editColumn('name_9', function ($row) {
                return $row->name_9 ? $row->name_9 : "";
            });
            $table->editColumn('name_10', function ($row) {
                return $row->name_10 ? $row->name_10 : "";
            });
            $table->editColumn('name_11', function ($row) {
                return $row->name_11 ? $row->name_11 : "";
            });
            $table->editColumn('name_12', function ($row) {
                return $row->name_12 ? $row->name_12 : "";
            });
            $table->editColumn('name_13', function ($row) {
                return $row->name_13 ? $row->name_13 : "";
            });
            $table->editColumn('name_14', function ($row) {
                return $row->name_14 ? $row->name_14 : "";
            });
            $table->editColumn('name_15', function ($row) {
                return $row->name_15 ? $row->name_15 : "";
            });
            $table->editColumn('name_16', function ($row) {
                return $row->name_16 ? $row->name_16 : "";
            });
            $table->editColumn('name_17', function ($row) {
                return $row->name_17 ? $row->name_17 : "";
            });
            $table->editColumn('name_18', function ($row) {
                return $row->name_18 ? $row->name_18 : "";
            });
            $table->editColumn('name_19', function ($row) {
                return $row->name_19 ? $row->name_19 : "";
            });
            $table->editColumn('name_20', function ($row) {
                return $row->name_20 ? $row->name_20 : "";
            });
            $table->editColumn('tank', function ($row) {
                return $row->tank ? $row->tank : "";
            });

            $table->editColumn('blank', function ($row) {
                return $row->blank ? $row->blank : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('pacsys.formValueNames.index');
    }

    public function create()
    {
        abort_if(Gate::denies('form_value_name_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueNames.create');
    }

    public function store(StoreFormValueNameRequest $request)
    {
        $formValueName = FormValueName::create($request->all());

        return redirect()->route('pacsys.form-value-names.index');
    }

    public function edit(FormValueName $formValueName)
    {
        abort_if(Gate::denies('form_value_name_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueNames.edit', compact('formValueName'));
    }

    public function update(UpdateFormValueNameRequest $request, FormValueName $formValueName)
    {
        $formValueName->update($request->all());

        return redirect()->route('pacsys.form-value-names.index');
    }

    public function show(FormValueName $formValueName)
    {
        abort_if(Gate::denies('form_value_name_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueNames.show', compact('formValueName'));
    }

    public function destroy(FormValueName $formValueName)
    {
        abort_if(Gate::denies('form_value_name_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueName->delete();

        return back();
    }

    public function massDestroy(MassDestroyFormValueNameRequest $request)
    {
        FormValueName::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
