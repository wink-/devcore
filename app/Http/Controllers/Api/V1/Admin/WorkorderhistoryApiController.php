<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkorderhistoryRequest;
use App\Http\Requests\UpdateWorkorderhistoryRequest;
use App\Http\Resources\Admin\WorkorderhistoryResource;
use App\Models\Workorderhistory;
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
