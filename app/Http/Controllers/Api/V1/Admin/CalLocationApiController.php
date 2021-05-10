<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalLocationRequest;
use App\Http\Requests\UpdateCalLocationRequest;
use App\Http\Resources\Admin\CalLocationResource;
use App\Models\CalLocation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalLocationApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_location_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalLocationResource(CalLocation::all());
    }

    public function store(StoreCalLocationRequest $request)
    {
        $calLocation = CalLocation::create($request->all());

        return (new CalLocationResource($calLocation))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CalLocation $calLocation)
    {
        abort_if(Gate::denies('cal_location_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalLocationResource($calLocation);
    }

    public function update(UpdateCalLocationRequest $request, CalLocation $calLocation)
    {
        $calLocation->update($request->all());

        return (new CalLocationResource($calLocation))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CalLocation $calLocation)
    {
        abort_if(Gate::denies('cal_location_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calLocation->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
