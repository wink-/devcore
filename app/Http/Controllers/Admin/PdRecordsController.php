<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPdRecordRequest;
use App\Http\Requests\StorePdRecordRequest;
use App\Http\Requests\UpdatePdRecordRequest;
use App\Models\Logger;
use App\Models\PdRecord;
use App\Models\PdUnit;
use App\Models\RecordType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PdRecordsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pd_record_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pdRecords = PdRecord::with(['logger', 'record_type', 'unit'])->get();

        return view('admin.pdRecords.index', compact('pdRecords'));
    }

    public function create()
    {
        abort_if(Gate::denies('pd_record_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loggers = Logger::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $record_types = RecordType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $units = PdUnit::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.pdRecords.create', compact('loggers', 'record_types', 'units'));
    }

    public function store(StorePdRecordRequest $request)
    {
        $pdRecord = PdRecord::create($request->all());

        return redirect()->route('admin.pd-records.index');
    }

    public function edit(PdRecord $pdRecord)
    {
        abort_if(Gate::denies('pd_record_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loggers = Logger::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $record_types = RecordType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $units = PdUnit::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $pdRecord->load('logger', 'record_type', 'unit');

        return view('admin.pdRecords.edit', compact('loggers', 'record_types', 'units', 'pdRecord'));
    }

    public function update(UpdatePdRecordRequest $request, PdRecord $pdRecord)
    {
        $pdRecord->update($request->all());

        return redirect()->route('admin.pd-records.index');
    }

    public function show(PdRecord $pdRecord)
    {
        abort_if(Gate::denies('pd_record_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pdRecord->load('logger', 'record_type', 'unit');

        return view('admin.pdRecords.show', compact('pdRecord'));
    }

    public function destroy(PdRecord $pdRecord)
    {
        abort_if(Gate::denies('pd_record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pdRecord->delete();

        return back();
    }

    public function massDestroy(MassDestroyPdRecordRequest $request)
    {
        PdRecord::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
