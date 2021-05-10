<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActionsTempRequest;
use App\Http\Requests\UpdateActionsTempRequest;
use App\Http\Resources\Admin\ActionsTempResource;
use App\Models\ActionsTemp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActionsTempApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('actions_temp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ActionsTempResource(ActionsTemp::all());
    }

    public function store(StoreActionsTempRequest $request)
    {
        $actionsTemp = ActionsTemp::create($request->all());

        return (new ActionsTempResource($actionsTemp))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ActionsTemp $actionsTemp)
    {
        abort_if(Gate::denies('actions_temp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ActionsTempResource($actionsTemp);
    }

    public function update(UpdateActionsTempRequest $request, ActionsTemp $actionsTemp)
    {
        $actionsTemp->update($request->all());

        return (new ActionsTempResource($actionsTemp))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ActionsTemp $actionsTemp)
    {
        abort_if(Gate::denies('actions_temp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $actionsTemp->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
