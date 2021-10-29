<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePdUnitRequest;
use App\Http\Requests\UpdatePdUnitRequest;
use App\Http\Resources\Admin\PdUnitResource;
use App\Models\PdUnit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PdUnitsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pd_unit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PdUnitResource(PdUnit::all());
    }

    public function store(StorePdUnitRequest $request)
    {
        $pdUnit = PdUnit::create($request->all());

        return (new PdUnitResource($pdUnit))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PdUnit $pdUnit)
    {
        abort_if(Gate::denies('pd_unit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PdUnitResource($pdUnit);
    }

    public function update(UpdatePdUnitRequest $request, PdUnit $pdUnit)
    {
        $pdUnit->update($request->all());

        return (new PdUnitResource($pdUnit))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(PdUnit $pdUnit)
    {
        abort_if(Gate::denies('pd_unit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pdUnit->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
