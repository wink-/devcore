<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalPeriodRequest;
use App\Http\Requests\UpdateCalPeriodRequest;
use App\Http\Resources\Admin\CalPeriodResource;
use App\Models\CalPeriod;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalPeriodApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_period_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalPeriodResource(CalPeriod::all());
    }

    public function store(StoreCalPeriodRequest $request)
    {
        $calPeriod = CalPeriod::create($request->all());

        return (new CalPeriodResource($calPeriod))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CalPeriod $calPeriod)
    {
        abort_if(Gate::denies('cal_period_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalPeriodResource($calPeriod);
    }

    public function update(UpdateCalPeriodRequest $request, CalPeriod $calPeriod)
    {
        $calPeriod->update($request->all());

        return (new CalPeriodResource($calPeriod))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CalPeriod $calPeriod)
    {
        abort_if(Gate::denies('cal_period_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calPeriod->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
