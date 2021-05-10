<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePUnitRequest;
use App\Http\Requests\UpdatePUnitRequest;
use App\Http\Resources\Admin\PUnitResource;
use App\Models\PUnit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PUnitApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('p_unit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PUnitResource(PUnit::all());
    }

    public function store(StorePUnitRequest $request)
    {
        $pUnit = PUnit::create($request->all());

        return (new PUnitResource($pUnit))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PUnit $pUnit)
    {
        abort_if(Gate::denies('p_unit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PUnitResource($pUnit);
    }

    public function update(UpdatePUnitRequest $request, PUnit $pUnit)
    {
        $pUnit->update($request->all());

        return (new PUnitResource($pUnit))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(PUnit $pUnit)
    {
        abort_if(Gate::denies('p_unit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pUnit->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
