<?php

namespace App\Http\Controllers\Api\V1\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessData\StoreUnitRequest;
use App\Http\Requests\ProcessData\UpdateUnitRequest;
use App\Http\Resources\ProcessData\UnitResource;
use App\Models\ProcessData\Unit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UnitsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('processdata_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UnitResource(Unit::all());
    }

    public function store(StoreUnitRequest $request)
    {
        $unit = Unit::create($request->all());

        return (new UnitResource($unit))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Unit $unit)
    {
        abort_if(Gate::denies('processdata_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UnitResource($unit);
    }

    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        $unit->update($request->all());

        return (new UnitResource($unit))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Unit $unit)
    {
        abort_if(Gate::denies('processdata_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $unit->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
