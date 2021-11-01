<?php

namespace App\Http\Controllers\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessData\MassDestroyRecordTypeRequest;
use App\Http\Requests\ProcessData\StoreRecordTypeRequest;
use App\Http\Requests\ProcessData\UpdateRecordTypeRequest;
use App\Models\ProcessData\RecordType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecordTypesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('process_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recordTypes = RecordType::all();

        return view('processData.recordTypes.index', compact('recordTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('process_data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('processData.recordTypes.create');
    }

    public function store(StoreRecordTypeRequest $request)
    {
        $recordType = RecordType::create($request->all());

        return redirect()->route('processData.record-types.index');
    }

    public function edit(RecordType $recordType)
    {
        abort_if(Gate::denies('process_data_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('processData.recordTypes.edit', compact('recordType'));
    }

    public function update(UpdateRecordTypeRequest $request, RecordType $recordType)
    {
        $recordType->update($request->all());

        return redirect()->route('processData.record-types.index');
    }

    public function show(RecordType $recordType)
    {
        abort_if(Gate::denies('process_data_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('processData.recordTypes.show', compact('recordType'));
    }

    public function destroy(RecordType $recordType)
    {
        abort_if(Gate::denies('process_data_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recordType->delete();

        return back();
    }

    public function massDestroy(MassDestroyRecordTypeRequest $request)
    {
        RecordType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
