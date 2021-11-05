<?php

namespace App\Http\Controllers\Api\V1\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\StoreRecordTypeRequest;
use App\Http\Requests\Pacsys\UpdateRecordTypeRequest;
use App\Http\Resources\Pacsys\RecordTypeResource;
use App\Models\RecordType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecordTypesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('record_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RecordTypeResource(RecordType::all());
    }

    public function store(StoreRecordTypeRequest $request)
    {
        $recordType = RecordType::create($request->all());

        return (new RecordTypeResource($recordType))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(RecordType $recordType)
    {
        abort_if(Gate::denies('record_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RecordTypeResource($recordType);
    }

    public function update(UpdateRecordTypeRequest $request, RecordType $recordType)
    {
        $recordType->update($request->all());

        return (new RecordTypeResource($recordType))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(RecordType $recordType)
    {
        abort_if(Gate::denies('record_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recordType->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
