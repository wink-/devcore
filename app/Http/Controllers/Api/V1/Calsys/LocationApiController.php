<?php

namespace App\Http\Controllers\Api\V1\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\StoreLocationRequest;
use App\Http\Requests\Calsys\UpdateLocationRequest;
use App\Http\Resources\Calsys\LocationResource;
use App\Models\Calsys\Location;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocationApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LocationResource(Location::all());
    }

    public function store(StoreLocationRequest $request)
    {
        $location = Location::create($request->all());

        return (new LocationResource($location))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Location $location)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LocationResource($location);
    }

    public function update(UpdateLocationRequest $request, Location $location)
    {
        $location->update($request->all());

        return (new LocationResource($location))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Location $location)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $location->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
