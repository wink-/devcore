<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRecordTypeRequest;
use App\Http\Requests\StoreRecordTypeRequest;
use App\Http\Requests\UpdateRecordTypeRequest;
use App\Models\RecordType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecordTypesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('record_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recordTypes = RecordType::all();

        return view('admin.recordTypes.index', compact('recordTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('record_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.recordTypes.create');
    }

    public function store(StoreRecordTypeRequest $request)
    {
        $recordType = RecordType::create($request->all());

        return redirect()->route('admin.record-types.index');
    }

    public function edit(RecordType $recordType)
    {
        abort_if(Gate::denies('record_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.recordTypes.edit', compact('recordType'));
    }

    public function update(UpdateRecordTypeRequest $request, RecordType $recordType)
    {
        $recordType->update($request->all());

        return redirect()->route('admin.record-types.index');
    }

    public function show(RecordType $recordType)
    {
        abort_if(Gate::denies('record_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.recordTypes.show', compact('recordType'));
    }

    public function destroy(RecordType $recordType)
    {
        abort_if(Gate::denies('record_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recordType->delete();

        return back();
    }

    public function massDestroy(MassDestroyRecordTypeRequest $request)
    {
        RecordType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
