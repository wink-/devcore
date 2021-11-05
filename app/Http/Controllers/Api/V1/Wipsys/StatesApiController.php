<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreStateRequest;
use App\Http\Requests\Wipsys\UpdateStateRequest;
use App\Http\Resources\Wipsys\StateResource;
use App\Models\Wipsys\State;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StatesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('state_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StateResource(State::all());
    }

    public function store(StoreStateRequest $request)
    {
        $state = State::create($request->all());

        return (new StateResource($state))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(State $state)
    {
        abort_if(Gate::denies('state_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StateResource($state);
    }

    public function update(UpdateStateRequest $request, State $state)
    {
        $state->update($request->all());

        return (new StateResource($state))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(State $state)
    {
        abort_if(Gate::denies('state_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $state->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
