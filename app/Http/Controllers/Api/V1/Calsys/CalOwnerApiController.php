<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalOwnerRequest;
use App\Http\Requests\UpdateCalOwnerRequest;
use App\Http\Resources\Admin\CalOwnerResource;
use App\Models\CalOwner;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalOwnerApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_owner_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalOwnerResource(CalOwner::all());
    }

    public function store(StoreCalOwnerRequest $request)
    {
        $calOwner = CalOwner::create($request->all());

        return (new CalOwnerResource($calOwner))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CalOwner $calOwner)
    {
        abort_if(Gate::denies('cal_owner_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalOwnerResource($calOwner);
    }

    public function update(UpdateCalOwnerRequest $request, CalOwner $calOwner)
    {
        $calOwner->update($request->all());

        return (new CalOwnerResource($calOwner))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CalOwner $calOwner)
    {
        abort_if(Gate::denies('cal_owner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calOwner->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
