<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAnalysisNewRequest;
use App\Http\Requests\StoreAnalysisNewRequest;
use App\Http\Requests\UpdateAnalysisNewRequest;
use App\Models\AnalysisNew;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AnalysisNewController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('analysis_new_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = AnalysisNew::query()->select(sprintf('%s.*', (new AnalysisNew)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'analysis_new_show';
                $editGate      = 'analysis_new_edit';
                $deleteGate    = 'analysis_new_delete';
                $crudRoutePart = 'analysis-news';

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
            $table->editColumn('label', function ($row) {
                return $row->label ? $row->label : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'delete_visible']);

            return $table->make(true);
        }

        return view('admin.analysisNews.index');
    }

    public function create()
    {
        abort_if(Gate::denies('analysis_new_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.analysisNews.create');
    }

    public function store(StoreAnalysisNewRequest $request)
    {
        $analysisNew = AnalysisNew::create($request->all());

        return redirect()->route('admin.analysis-news.index');
    }

    public function edit(AnalysisNew $analysisNew)
    {
        abort_if(Gate::denies('analysis_new_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.analysisNews.edit', compact('analysisNew'));
    }

    public function update(UpdateAnalysisNewRequest $request, AnalysisNew $analysisNew)
    {
        $analysisNew->update($request->all());

        return redirect()->route('admin.analysis-news.index');
    }

    public function show(AnalysisNew $analysisNew)
    {
        abort_if(Gate::denies('analysis_new_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.analysisNews.show', compact('analysisNew'));
    }

    public function destroy(AnalysisNew $analysisNew)
    {
        abort_if(Gate::denies('analysis_new_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $analysisNew->delete();

        return back();
    }

    public function massDestroy(MassDestroyAnalysisNewRequest $request)
    {
        AnalysisNew::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
