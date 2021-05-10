<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePdRecordRequest;
use App\Http\Requests\UpdatePdRecordRequest;
use App\Http\Resources\Admin\PdRecordResource;
use App\Models\PdRecord;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PdRecordsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pd_record_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PdRecordResource(PdRecord::with(['logger', 'record_type', 'unit'])->get());
    }

    public function store(StorePdRecordRequest $request)
    {
        $pdRecord = PdRecord::create($request->all());

        return (new PdRecordResource($pdRecord))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PdRecord $pdRecord)
    {
        abort_if(Gate::denies('pd_record_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PdRecordResource($pdRecord->load(['logger', 'record_type', 'unit']));
    }

    public function update(UpdatePdRecordRequest $request, PdRecord $pdRecord)
    {
        $pdRecord->update($request->all());

        return (new PdRecordResource($pdRecord))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(PdRecord $pdRecord)
    {
        abort_if(Gate::denies('pd_record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pdRecord->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
