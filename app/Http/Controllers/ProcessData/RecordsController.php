<?php

namespace App\Http\Controllers\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRecordRequest;
use App\Http\Requests\StoreRecordRequest;
use App\Http\Requests\UpdateRecordRequest;
use App\Models\ProcessData\Logger;
use App\Models\ProcessData\Record;
use App\Models\ProcessData\Unit;
use App\Models\ProcessData\RecordType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecordsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('process_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $Records = Record::with(['logger', 'record_type', 'unit'])->get();

        return view('admin.records.index', compact('Records'));
    }

    public function create()
    {
        abort_if(Gate::denies('process_data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loggers = Logger::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $record_types = RecordType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $units = Unit::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.records.create', compact('loggers', 'record_types', 'units'));
    }

    public function store(StoreRecordRequest $request)
    {
        $Record = Record::create($request->all());

        return redirect()->route('admin.-records.index');
    }

    public function edit(Record $Record)
    {
        abort_if(Gate::denies('process_data_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loggers = Logger::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $record_types = RecordType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $units = Unit::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $Record->load('logger', 'record_type', 'unit');

        return view('admin.records.edit', compact('loggers', 'record_types', 'units', 'Record'));
    }

    public function update(UpdateRecordRequest $request, Record $Record)
    {
        $Record->update($request->all());

        return redirect()->route('admin.records.index');
    }

    public function show(Record $Record)
    {
        abort_if(Gate::denies('process_data_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $Record->load('logger', 'record_type', 'unit');

        return view('admin.records.show', compact('Record'));
    }

    public function destroy(Record $Record)
    {
        abort_if(Gate::denies('process_data_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $Record->delete();

        return back();
    }

    public function massDestroy(MassDestroyRecordRequest $request)
    {
        Record::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
