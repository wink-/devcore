<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyRecordRequest;
use App\Http\Requests\Pacsys\StoreRecordRequest;
use App\Http\Requests\Pacsys\UpdateRecordRequest;
use App\Models\Pacsys\Pacsys\Record;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class RecordController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('record_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Record::query()->select(sprintf('%s.*', (new Record)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'record_show';
                $editGate      = 'record_edit';
                $deleteGate    = 'record_delete';
                $crudRoutePart = 'records';

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
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });
            $table->editColumn('form_name', function ($row) {
                return $row->form_name ? $row->form_name : "";
            });
            $table->editColumn('form_type', function ($row) {
                return $row->form_type ? $row->form_type : "";
            });
            $table->editColumn('scope_name', function ($row) {
                return $row->scope_name ? $row->scope_name : "";
            });
            $table->editColumn('image', function ($row) {
                return $row->image ? $row->image : "";
            });

            $table->editColumn('capacity_old', function ($row) {
                return $row->capacity_old ? $row->capacity_old : "";
            });
            $table->editColumn('capacity_unit', function ($row) {
                return $row->capacity_unit ? $row->capacity_unit : "";
            });
            $table->editColumn('capacity', function ($row) {
                return $row->capacity ? $row->capacity : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('pacsys.records.index');
    }

    public function create()
    {
        abort_if(Gate::denies('record_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.records.create');
    }

    public function store(StoreRecordRequest $request)
    {
        $record = Record::create($request->all());

        return redirect()->route('pacsys.records.index');
    }

    public function edit(Record $record)
    {
        abort_if(Gate::denies('record_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.records.edit', compact('record'));
    }

    public function update(UpdateRecordRequest $request, Record $record)
    {
        $record->update($request->all());

        return redirect()->route('pacsys.records.index');
    }

    public function show(Record $record)
    {
        abort_if(Gate::denies('record_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.records.show', compact('record'));
    }

    public function destroy(Record $record)
    {
        abort_if(Gate::denies('record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $record->delete();

        return back();
    }

    public function massDestroy(MassDestroyRecordRequest $request)
    {
        Record::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
