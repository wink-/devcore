<?php

namespace App\Http\Controllers\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessData\MassDestroyRecordRequest;
use App\Http\Requests\ProcessData\StoreRecordRequest;
use App\Http\Requests\ProcessData\UpdateRecordRequest;
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

        $records = Record::with(['logger', 'record_type', 'unit'])->get();

        return view('processData.records.index', compact('records'));
    }

    public function create()
    {
        abort_if(Gate::denies('process_data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loggers = Logger::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $record_types = RecordType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $units = Unit::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('processData.records.create', compact('loggers', 'record_types', 'units'));
    }

    public function store(StoreRecordRequest $request)
    {
        $record = Record::create($request->all());

        return redirect()->route('processData.records.index');
    }

    public function edit(Record $Record)
    {
        abort_if(Gate::denies('process_data_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loggers = Logger::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $record_types = RecordType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $units = Unit::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $record->load('logger', 'record_type', 'unit');

        return view('processData.records.edit', compact('loggers', 'record_types', 'units', 'record'));
    }

    public function update(UpdateRecordRequest $request, Record $Record)
    {
        $record->update($request->all());

        return redirect()->route('processData.records.index');
    }

    public function show(Record $Record)
    {
        abort_if(Gate::denies('process_data_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $record->load('logger', 'record_type', 'unit');

        return view('processData.records.show', compact('record'));
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
