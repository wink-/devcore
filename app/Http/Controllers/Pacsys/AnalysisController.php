<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyAnalysiRequest;
use App\Http\Requests\Pacsys\StoreAnalysiRequest;
use App\Http\Requests\Pacsys\UpdateAnalysiRequest;
use App\Models\Pacsys\Pacsys\Analysi;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AnalysisController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('analysi_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Analysi::query()->select(sprintf('%s.*', (new Analysi)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'analysi_show';
                $editGate      = 'analysi_edit';
                $deleteGate    = 'analysi_delete';
                $crudRoutePart = 'analysis';

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
            $table->editColumn('record_name', function ($row) {
                return $row->record_name ? $row->record_name : "";
            });
            $table->editColumn('form_name', function ($row) {
                return $row->form_name ? $row->form_name : "";
            });

            $table->editColumn('value_1', function ($row) {
                return $row->value_1 ? $row->value_1 : "";
            });
            $table->editColumn('value_2', function ($row) {
                return $row->value_2 ? $row->value_2 : "";
            });
            $table->editColumn('value_3', function ($row) {
                return $row->value_3 ? $row->value_3 : "";
            });
            $table->editColumn('value_4', function ($row) {
                return $row->value_4 ? $row->value_4 : "";
            });
            $table->editColumn('value_5', function ($row) {
                return $row->value_5 ? $row->value_5 : "";
            });
            $table->editColumn('value_6', function ($row) {
                return $row->value_6 ? $row->value_6 : "";
            });
            $table->editColumn('value_7', function ($row) {
                return $row->value_7 ? $row->value_7 : "";
            });
            $table->editColumn('value_8', function ($row) {
                return $row->value_8 ? $row->value_8 : "";
            });
            $table->editColumn('value_9', function ($row) {
                return $row->value_9 ? $row->value_9 : "";
            });
            $table->editColumn('value_10', function ($row) {
                return $row->value_10 ? $row->value_10 : "";
            });
            $table->editColumn('value_11', function ($row) {
                return $row->value_11 ? $row->value_11 : "";
            });
            $table->editColumn('value_12', function ($row) {
                return $row->value_12 ? $row->value_12 : "";
            });
            $table->editColumn('value_13', function ($row) {
                return $row->value_13 ? $row->value_13 : "";
            });
            $table->editColumn('value_14', function ($row) {
                return $row->value_14 ? $row->value_14 : "";
            });
            $table->editColumn('value_15', function ($row) {
                return $row->value_15 ? $row->value_15 : "";
            });
            $table->editColumn('value_16', function ($row) {
                return $row->value_16 ? $row->value_16 : "";
            });
            $table->editColumn('value_17', function ($row) {
                return $row->value_17 ? $row->value_17 : "";
            });
            $table->editColumn('value_18', function ($row) {
                return $row->value_18 ? $row->value_18 : "";
            });
            $table->editColumn('value_19', function ($row) {
                return $row->value_19 ? $row->value_19 : "";
            });
            $table->editColumn('value_20', function ($row) {
                return $row->value_20 ? $row->value_20 : "";
            });
            $table->editColumn('tank', function ($row) {
                return $row->tank ? $row->tank : "";
            });
            $table->editColumn('emp_code', function ($row) {
                return $row->emp_code ? $row->emp_code : "";
            });

            $table->editColumn('delete_visible', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->delete_visible ? 'checked' : null) . '>';
            });
            $table->editColumn('i_dy', function ($row) {
                return $row->i_dy ? $row->i_dy : "";
            });
            $table->editColumn('act_value_1', function ($row) {
                return $row->act_value_1 ? $row->act_value_1 : "";
            });
            $table->editColumn('act_value_2', function ($row) {
                return $row->act_value_2 ? $row->act_value_2 : "";
            });
            $table->editColumn('act_value_3', function ($row) {
                return $row->act_value_3 ? $row->act_value_3 : "";
            });
            $table->editColumn('act_value_4', function ($row) {
                return $row->act_value_4 ? $row->act_value_4 : "";
            });
            $table->editColumn('act_value_5', function ($row) {
                return $row->act_value_5 ? $row->act_value_5 : "";
            });
            $table->editColumn('act_value_6', function ($row) {
                return $row->act_value_6 ? $row->act_value_6 : "";
            });
            $table->editColumn('act_value_7', function ($row) {
                return $row->act_value_7 ? $row->act_value_7 : "";
            });
            $table->editColumn('act_value_8', function ($row) {
                return $row->act_value_8 ? $row->act_value_8 : "";
            });
            $table->editColumn('act_value_9', function ($row) {
                return $row->act_value_9 ? $row->act_value_9 : "";
            });
            $table->editColumn('act_value_10', function ($row) {
                return $row->act_value_10 ? $row->act_value_10 : "";
            });
            $table->editColumn('act_value_11', function ($row) {
                return $row->act_value_11 ? $row->act_value_11 : "";
            });
            $table->editColumn('act_value_12', function ($row) {
                return $row->act_value_12 ? $row->act_value_12 : "";
            });
            $table->editColumn('act_value_13', function ($row) {
                return $row->act_value_13 ? $row->act_value_13 : "";
            });
            $table->editColumn('act_value_14', function ($row) {
                return $row->act_value_14 ? $row->act_value_14 : "";
            });
            $table->editColumn('act_value_15', function ($row) {
                return $row->act_value_15 ? $row->act_value_15 : "";
            });
            $table->editColumn('act_value_16', function ($row) {
                return $row->act_value_16 ? $row->act_value_16 : "";
            });
            $table->editColumn('act_value_17', function ($row) {
                return $row->act_value_17 ? $row->act_value_17 : "";
            });
            $table->editColumn('act_value_18', function ($row) {
                return $row->act_value_18 ? $row->act_value_18 : "";
            });
            $table->editColumn('act_value_19', function ($row) {
                return $row->act_value_19 ? $row->act_value_19 : "";
            });
            $table->editColumn('act_value_20', function ($row) {
                return $row->act_value_20 ? $row->act_value_20 : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'delete_visible']);

            return $table->make(true);
        }

        return view('pacsys.analysis.index');
    }

    public function create()
    {
        abort_if(Gate::denies('analysi_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.analysis.create');
    }

    public function store(StoreAnalysiRequest $request)
    {
        $analysi = Analysi::create($request->all());

        return redirect()->route('pacsys.analysis.index');
    }

    public function edit(Analysi $analysi)
    {
        abort_if(Gate::denies('analysi_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.analysis.edit', compact('analysi'));
    }

    public function update(UpdateAnalysiRequest $request, Analysi $analysi)
    {
        $analysi->update($request->all());

        return redirect()->route('pacsys.analysis.index');
    }

    public function show(Analysi $analysi)
    {
        abort_if(Gate::denies('analysi_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.analysis.show', compact('analysi'));
    }

    public function destroy(Analysi $analysi)
    {
        abort_if(Gate::denies('analysi_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $analysi->delete();

        return back();
    }

    public function massDestroy(MassDestroyAnalysiRequest $request)
    {
        Analysi::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
