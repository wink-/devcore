<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyFormValuePeriodRequest;
use App\Http\Requests\Pacsys\StoreFormValuePeriodRequest;
use App\Http\Requests\Pacsys\UpdateFormValuePeriodRequest;
use App\Models\Pacsys\FormValuePeriod;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FormValuePeriodController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('form_value_period_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = FormValuePeriod::query()->select(sprintf('%s.*', (new FormValuePeriod)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'form_value_period_show';
                $editGate      = 'form_value_period_edit';
                $deleteGate    = 'form_value_period_delete';
                $crudRoutePart = 'form-value-periods';

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
            $table->editColumn('period_1', function ($row) {
                return $row->period_1 ? $row->period_1 : "";
            });
            $table->editColumn('period_2', function ($row) {
                return $row->period_2 ? $row->period_2 : "";
            });
            $table->editColumn('period_3', function ($row) {
                return $row->period_3 ? $row->period_3 : "";
            });
            $table->editColumn('period_4', function ($row) {
                return $row->period_4 ? $row->period_4 : "";
            });
            $table->editColumn('period_5', function ($row) {
                return $row->period_5 ? $row->period_5 : "";
            });
            $table->editColumn('period_6', function ($row) {
                return $row->period_6 ? $row->period_6 : "";
            });
            $table->editColumn('period_7', function ($row) {
                return $row->period_7 ? $row->period_7 : "";
            });
            $table->editColumn('period_8', function ($row) {
                return $row->period_8 ? $row->period_8 : "";
            });
            $table->editColumn('period_9', function ($row) {
                return $row->period_9 ? $row->period_9 : "";
            });
            $table->editColumn('period_10', function ($row) {
                return $row->period_10 ? $row->period_10 : "";
            });
            $table->editColumn('period_11', function ($row) {
                return $row->period_11 ? $row->period_11 : "";
            });
            $table->editColumn('period_12', function ($row) {
                return $row->period_12 ? $row->period_12 : "";
            });
            $table->editColumn('period_13', function ($row) {
                return $row->period_13 ? $row->period_13 : "";
            });
            $table->editColumn('period_14', function ($row) {
                return $row->period_14 ? $row->period_14 : "";
            });
            $table->editColumn('period_15', function ($row) {
                return $row->period_15 ? $row->period_15 : "";
            });
            $table->editColumn('period_16', function ($row) {
                return $row->period_16 ? $row->period_16 : "";
            });
            $table->editColumn('period_17', function ($row) {
                return $row->period_17 ? $row->period_17 : "";
            });
            $table->editColumn('period_18', function ($row) {
                return $row->period_18 ? $row->period_18 : "";
            });
            $table->editColumn('period_19', function ($row) {
                return $row->period_19 ? $row->period_19 : "";
            });
            $table->editColumn('period_20', function ($row) {
                return $row->period_20 ? $row->period_20 : "";
            });
            $table->editColumn('tank', function ($row) {
                return $row->tank ? $row->tank : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('pacsys.formValuePeriods.index');
    }

    public function create()
    {
        abort_if(Gate::denies('form_value_period_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValuePeriods.create');
    }

    public function store(StoreFormValuePeriodRequest $request)
    {
        $formValuePeriod = FormValuePeriod::create($request->all());

        return redirect()->route('pacsys.form-value-periods.index');
    }

    public function edit(FormValuePeriod $formValuePeriod)
    {
        abort_if(Gate::denies('form_value_period_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValuePeriods.edit', compact('formValuePeriod'));
    }

    public function update(UpdateFormValuePeriodRequest $request, FormValuePeriod $formValuePeriod)
    {
        $formValuePeriod->update($request->all());

        return redirect()->route('pacsys.form-value-periods.index');
    }

    public function show(FormValuePeriod $formValuePeriod)
    {
        abort_if(Gate::denies('form_value_period_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValuePeriods.show', compact('formValuePeriod'));
    }

    public function destroy(FormValuePeriod $formValuePeriod)
    {
        abort_if(Gate::denies('form_value_period_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValuePeriod->delete();

        return back();
    }

    public function massDestroy(MassDestroyFormValuePeriodRequest $request)
    {
        FormValuePeriod::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
