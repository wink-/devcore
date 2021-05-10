<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFormValueRangeRequest;
use App\Http\Requests\StoreFormValueRangeRequest;
use App\Http\Requests\UpdateFormValueRangeRequest;
use App\Models\FormValueRange;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FormValueRangeController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('form_value_range_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = FormValueRange::query()->select(sprintf('%s.*', (new FormValueRange)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'form_value_range_show';
                $editGate      = 'form_value_range_edit';
                $deleteGate    = 'form_value_range_delete';
                $crudRoutePart = 'form-value-ranges';

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
            $table->editColumn('min_1', function ($row) {
                return $row->min_1 ? $row->min_1 : "";
            });
            $table->editColumn('max_1', function ($row) {
                return $row->max_1 ? $row->max_1 : "";
            });
            $table->editColumn('min_2', function ($row) {
                return $row->min_2 ? $row->min_2 : "";
            });
            $table->editColumn('max_2', function ($row) {
                return $row->max_2 ? $row->max_2 : "";
            });
            $table->editColumn('min_3', function ($row) {
                return $row->min_3 ? $row->min_3 : "";
            });
            $table->editColumn('max_3', function ($row) {
                return $row->max_3 ? $row->max_3 : "";
            });
            $table->editColumn('min_4', function ($row) {
                return $row->min_4 ? $row->min_4 : "";
            });
            $table->editColumn('max_4', function ($row) {
                return $row->max_4 ? $row->max_4 : "";
            });
            $table->editColumn('min_5', function ($row) {
                return $row->min_5 ? $row->min_5 : "";
            });
            $table->editColumn('max_5', function ($row) {
                return $row->max_5 ? $row->max_5 : "";
            });
            $table->editColumn('min_6', function ($row) {
                return $row->min_6 ? $row->min_6 : "";
            });
            $table->editColumn('max_6', function ($row) {
                return $row->max_6 ? $row->max_6 : "";
            });
            $table->editColumn('min_7', function ($row) {
                return $row->min_7 ? $row->min_7 : "";
            });
            $table->editColumn('max_7', function ($row) {
                return $row->max_7 ? $row->max_7 : "";
            });
            $table->editColumn('min_8', function ($row) {
                return $row->min_8 ? $row->min_8 : "";
            });
            $table->editColumn('max_8', function ($row) {
                return $row->max_8 ? $row->max_8 : "";
            });
            $table->editColumn('min_9', function ($row) {
                return $row->min_9 ? $row->min_9 : "";
            });
            $table->editColumn('max_9', function ($row) {
                return $row->max_9 ? $row->max_9 : "";
            });
            $table->editColumn('min_10', function ($row) {
                return $row->min_10 ? $row->min_10 : "";
            });
            $table->editColumn('max_10', function ($row) {
                return $row->max_10 ? $row->max_10 : "";
            });
            $table->editColumn('min_11', function ($row) {
                return $row->min_11 ? $row->min_11 : "";
            });
            $table->editColumn('max_11', function ($row) {
                return $row->max_11 ? $row->max_11 : "";
            });
            $table->editColumn('min_12', function ($row) {
                return $row->min_12 ? $row->min_12 : "";
            });
            $table->editColumn('max_12', function ($row) {
                return $row->max_12 ? $row->max_12 : "";
            });
            $table->editColumn('min_13', function ($row) {
                return $row->min_13 ? $row->min_13 : "";
            });
            $table->editColumn('max_13', function ($row) {
                return $row->max_13 ? $row->max_13 : "";
            });
            $table->editColumn('min_14', function ($row) {
                return $row->min_14 ? $row->min_14 : "";
            });
            $table->editColumn('max_14', function ($row) {
                return $row->max_14 ? $row->max_14 : "";
            });
            $table->editColumn('min_15', function ($row) {
                return $row->min_15 ? $row->min_15 : "";
            });
            $table->editColumn('max_15', function ($row) {
                return $row->max_15 ? $row->max_15 : "";
            });
            $table->editColumn('min_16', function ($row) {
                return $row->min_16 ? $row->min_16 : "";
            });
            $table->editColumn('max_16', function ($row) {
                return $row->max_16 ? $row->max_16 : "";
            });
            $table->editColumn('min_17', function ($row) {
                return $row->min_17 ? $row->min_17 : "";
            });
            $table->editColumn('max_17', function ($row) {
                return $row->max_17 ? $row->max_17 : "";
            });
            $table->editColumn('min_18', function ($row) {
                return $row->min_18 ? $row->min_18 : "";
            });
            $table->editColumn('max_18', function ($row) {
                return $row->max_18 ? $row->max_18 : "";
            });
            $table->editColumn('min_19', function ($row) {
                return $row->min_19 ? $row->min_19 : "";
            });
            $table->editColumn('max_19', function ($row) {
                return $row->max_19 ? $row->max_19 : "";
            });
            $table->editColumn('min_20', function ($row) {
                return $row->min_20 ? $row->min_20 : "";
            });
            $table->editColumn('max_20', function ($row) {
                return $row->max_20 ? $row->max_20 : "";
            });
            $table->editColumn('tank', function ($row) {
                return $row->tank ? $row->tank : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.formValueRanges.index');
    }

    public function create()
    {
        abort_if(Gate::denies('form_value_range_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.formValueRanges.create');
    }

    public function store(StoreFormValueRangeRequest $request)
    {
        $formValueRange = FormValueRange::create($request->all());

        return redirect()->route('admin.form-value-ranges.index');
    }

    public function edit(FormValueRange $formValueRange)
    {
        abort_if(Gate::denies('form_value_range_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.formValueRanges.edit', compact('formValueRange'));
    }

    public function update(UpdateFormValueRangeRequest $request, FormValueRange $formValueRange)
    {
        $formValueRange->update($request->all());

        return redirect()->route('admin.form-value-ranges.index');
    }

    public function show(FormValueRange $formValueRange)
    {
        abort_if(Gate::denies('form_value_range_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.formValueRanges.show', compact('formValueRange'));
    }

    public function destroy(FormValueRange $formValueRange)
    {
        abort_if(Gate::denies('form_value_range_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueRange->delete();

        return back();
    }

    public function massDestroy(MassDestroyFormValueRangeRequest $request)
    {
        FormValueRange::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
