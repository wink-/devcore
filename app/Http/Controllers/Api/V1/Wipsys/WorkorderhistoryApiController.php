<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreWorkorderhistoryRequest;
use App\Http\Requests\Wipsys\UpdateWorkorderhistoryRequest;
use App\Http\Resources\Wipsys\WorkorderhistoryResource;
use App\Models\Wipsys\Workorderhistory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkorderhistoryApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('workorderhistory_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WorkorderhistoryResource(Workorderhistory::with(['part'])->get());
    }

    public function store(StoreWorkorderhistoryRequest $request)
    {
        $workorderhistory = Workorderhistory::create($request->all());

        return (new WorkorderhistoryResource($workorderhistory))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Workorderhistory $workorderhistory)
    {
        abort_if(Gate::denies('workorderhistory_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WorkorderhistoryResource($workorderhistory->load(['part']));
    }

    public function update(UpdateWorkorderhistoryRequest $request, Workorderhistory $workorderhistory)
    {
        $workorderhistory->update($request->all());

        return (new WorkorderhistoryResource($workorderhistory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
