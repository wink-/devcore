<?php

namespace App\Http\Controllers\Api\V1\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\StorePeriodRequest;
use App\Http\Requests\Calsys\UpdatePeriodRequest;
use App\Http\Resources\Calsys\PeriodResource;
use App\Models\Calsys\Period;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PeriodApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PeriodResource(Period::all());
    }

    public function store(StorePeriodRequest $request)
    {
        $period = Period::create($request->all());

        return (new PeriodResource($period))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Period $period)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PeriodResource($period);
    }

    public function update(UpdatePeriodRequest $request, Period $period)
    {
        $period->update($request->all());

        return (new PeriodResource($period))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Period $period)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $period->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
