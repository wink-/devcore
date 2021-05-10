<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalStatusRequest;
use App\Http\Requests\UpdateCalStatusRequest;
use App\Http\Resources\Admin\CalStatusResource;
use App\Models\CalStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalStatusApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalStatusResource(CalStatus::all());
    }

    public function store(StoreCalStatusRequest $request)
    {
        $calStatus = CalStatus::create($request->all());

        return (new CalStatusResource($calStatus))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CalStatus $calStatus)
    {
        abort_if(Gate::denies('cal_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalStatusResource($calStatus);
    }

    public function update(UpdateCalStatusRequest $request, CalStatus $calStatus)
    {
        $calStatus->update($request->all());

        return (new CalStatusResource($calStatus))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CalStatus $calStatus)
    {
        abort_if(Gate::denies('cal_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calStatus->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
