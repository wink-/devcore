<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFormValueUnitRequest;
use App\Http\Requests\StoreFormValueUnitRequest;
use App\Http\Requests\UpdateFormValueUnitRequest;
use App\Models\FormValueUnit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FormValueUnitController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('form_value_unit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = FormValueUnit::query()->select(sprintf('%s.*', (new FormValueUnit)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'form_value_unit_show';
                $editGate      = 'form_value_unit_edit';
                $deleteGate    = 'form_value_unit_delete';
                $crudRoutePart = 'form-value-units';

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
            $table->editColumn('unit_1', function ($row) {
                return $row->unit_1 ? $row->unit_1 : "";
            });
            $table->editColumn('unit_2', function ($row) {
                return $row->unit_2 ? $row->unit_2 : "";
            });
            $table->editColumn('unit_3', function ($row) {
                return $row->unit_3 ? $row->unit_3 : "";
            });
            $table->editColumn('unit_4', function ($row) {
                return $row->unit_4 ? $row->unit_4 : "";
            });
            $table->editColumn('unit_5', function ($row) {
                return $row->unit_5 ? $row->unit_5 : "";
            });
            $table->editColumn('unit_6', function ($row) {
                return $row->unit_6 ? $row->unit_6 : "";
            });
            $table->editColumn('unit_7', function ($row) {
                return $row->unit_7 ? $row->unit_7 : "";
            });
            $table->editColumn('unit_8', function ($row) {
                return $row->unit_8 ? $row->unit_8 : "";
            });
            $table->editColumn('unit_9', function ($row) {
                return $row->unit_9 ? $row->unit_9 : "";
            });
            $table->editColumn('unit_10', function ($row) {
                return $row->unit_10 ? $row->unit_10 : "";
            });
            $table->editColumn('unit_11', function ($row) {
                return $row->unit_11 ? $row->unit_11 : "";
            });
            $table->editColumn('unit_12', function ($row) {
                return $row->unit_12 ? $row->unit_12 : "";
            });
            $table->editColumn('unit_13', function ($row) {
                return $row->unit_13 ? $row->unit_13 : "";
            });
            $table->editColumn('unit_14', function ($row) {
                return $row->unit_14 ? $row->unit_14 : "";
            });
            $table->editColumn('unit_15', function ($row) {
                return $row->unit_15 ? $row->unit_15 : "";
            });
            $table->editColumn('unit_16', function ($row) {
                return $row->unit_16 ? $row->unit_16 : "";
            });
            $table->editColumn('unit_17', function ($row) {
                return $row->unit_17 ? $row->unit_17 : "";
            });
            $table->editColumn('unit_18', function ($row) {
                return $row->unit_18 ? $row->unit_18 : "";
            });
            $table->editColumn('unit_19', function ($row) {
                return $row->unit_19 ? $row->unit_19 : "";
            });
            $table->editColumn('unit_20', function ($row) {
                return $row->unit_20 ? $row->unit_20 : "";
            });
            $table->editColumn('tank', function ($row) {
                return $row->tank ? $row->tank : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.formValueUnits.index');
    }

    public function create()
    {
        abort_if(Gate::denies('form_value_unit_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.formValueUnits.create');
    }

    public function store(StoreFormValueUnitRequest $request)
    {
        $formValueUnit = FormValueUnit::create($request->all());

        return redirect()->route('admin.form-value-units.index');
    }

    public function edit(FormValueUnit $formValueUnit)
    {
        abort_if(Gate::denies('form_value_unit_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.formValueUnits.edit', compact('formValueUnit'));
    }

    public function update(UpdateFormValueUnitRequest $request, FormValueUnit $formValueUnit)
    {
        $formValueUnit->update($request->all());

        return redirect()->route('admin.form-value-units.index');
    }

    public function show(FormValueUnit $formValueUnit)
    {
        abort_if(Gate::denies('form_value_unit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.formValueUnits.show', compact('formValueUnit'));
    }

    public function destroy(FormValueUnit $formValueUnit)
    {
        abort_if(Gate::denies('form_value_unit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueUnit->delete();

        return back();
    }

    public function massDestroy(MassDestroyFormValueUnitRequest $request)
    {
        FormValueUnit::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
