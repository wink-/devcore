<?php

namespace App\Http\Controllers\Api\V1\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\StoreCalibratedByRequest;
use App\Http\Requests\Calsys\UpdateCalibratedByRequest;
use App\Http\Resources\Calsys\CalibratedByResource;
use App\Models\Calsys\CalibratedBy;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalibratedByApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalibratedByResource(CalibratedBy::all());
    }

    public function store(StoreCalibratedByRequest $request)
    {
        $calibratedBy = CalibratedBy::create($request->all());

        return (new CalibratedByResource($calibratedBy))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CalibratedBy $calibratedBy)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalibratedByResource($calibratedBy);
    }

    public function update(UpdateCalibratedByRequest $request, CalibratedBy $calibratedBy)
    {
        $calibratedBy->update($request->all());

        return (new CalibratedByResource($calibratedBy))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CalibratedBy $calibratedBy)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calibratedBy->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
