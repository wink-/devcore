<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreWorkgroupRequest;
use App\Http\Requests\Wipsys\UpdateWorkgroupRequest;
use App\Http\Resources\Wipsys\WorkgroupResource;
use App\Models\Wipsys\Workgroup;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkgroupsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('workgroup_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WorkgroupResource(Workgroup::all());
    }

    public function store(StoreWorkgroupRequest $request)
    {
        $workgroup = Workgroup::create($request->all());

        return (new WorkgroupResource($workgroup))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Workgroup $workgroup)
    {
        abort_if(Gate::denies('workgroup_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WorkgroupResource($workgroup);
    }

    public function update(UpdateWorkgroupRequest $request, Workgroup $workgroup)
    {
        $workgroup->update($request->all());

        return (new WorkgroupResource($workgroup))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Workgroup $workgroup)
    {
        abort_if(Gate::denies('workgroup_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workgroup->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
