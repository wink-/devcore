<?php

namespace App\Http\Controllers\Api\V1\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\StoreStatusRequest;
use App\Http\Requests\Calsys\UpdateStatusRequest;
use App\Http\Resources\Calsys\StatusResource;
use App\Models\Calsys\Status;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StatusApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StatusResource(Status::all());
    }

    public function store(StoreStatusRequest $request)
    {
        $status = Status::create($request->all());

        return (new StatusResource($status))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Status $status)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StatusResource($status);
    }

    public function update(UpdateStatusRequest $request, Status $status)
    {
        $status->update($request->all());

        return (new StatusResource($status))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Status $status)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $status->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
