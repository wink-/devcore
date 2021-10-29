<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCalcValueRequest;
use App\Http\Requests\StoreCalcValueRequest;
use App\Http\Requests\UpdateCalcValueRequest;
use App\Models\CalcValue;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CalcValueController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('calc_value_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = CalcValue::query()->select(sprintf('%s.*', (new CalcValue)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'calc_value_show';
                $editGate      = 'calc_value_edit';
                $deleteGate    = 'calc_value_delete';
                $crudRoutePart = 'calc-values';

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
            $table->editColumn('value_name', function ($row) {
                return $row->value_name ? $row->value_name : "";
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });
            $table->editColumn('formula', function ($row) {
                return $row->formula ? $row->formula : "";
            });
            $table->editColumn('order_calc', function ($row) {
                return $row->order_calc ? $row->order_calc : "";
            });
            $table->editColumn('form_name', function ($row) {
                return $row->form_name ? $row->form_name : "";
            });
            $table->editColumn('decimal_places', function ($row) {
                return $row->decimal_places ? $row->decimal_places : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.calcValues.index');
    }

    public function create()
    {
        abort_if(Gate::denies('calc_value_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calcValues.create');
    }

    public function store(StoreCalcValueRequest $request)
    {
        $calcValue = CalcValue::create($request->all());

        return redirect()->route('admin.calc-values.index');
    }

    public function edit(CalcValue $calcValue)
    {
        abort_if(Gate::denies('calc_value_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calcValues.edit', compact('calcValue'));
    }

    public function update(UpdateCalcValueRequest $request, CalcValue $calcValue)
    {
        $calcValue->update($request->all());

        return redirect()->route('admin.calc-values.index');
    }

    public function show(CalcValue $calcValue)
    {
        abort_if(Gate::denies('calc_value_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calcValues.show', compact('calcValue'));
    }

    public function destroy(CalcValue $calcValue)
    {
        abort_if(Gate::denies('calc_value_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calcValue->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalcValueRequest $request)
    {
        CalcValue::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
