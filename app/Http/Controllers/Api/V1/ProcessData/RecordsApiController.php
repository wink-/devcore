<?php

namespace App\Http\Controllers\Api\V1\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessData\StoreRecordRequest;
use App\Http\Requests\ProcessData\UpdateRecordRequest;
use App\Http\Resources\ProcessData\RecordResource;
use App\Models\ProcessData\Record;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecordsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('processdata_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RecordResource(Record::with(['logger', 'record_type', 'unit'])->get());
    }

    public function store(StoreRecordRequest $request)
    {
        $record = Record::create($request->all());

        return (new RecordResource($record))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Record $record)
    {
        abort_if(Gate::denies('processdata_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RecordResource($record->load(['logger', 'record_type', 'unit']));
    }

    public function update(UpdateRecordRequest $request, Record $record)
    {
        $record->update($request->all());

        return (new RecordResource($record))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Record $record)
    {
        abort_if(Gate::denies('processdata_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $record->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
