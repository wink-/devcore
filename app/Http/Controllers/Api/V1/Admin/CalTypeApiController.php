<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalTypeRequest;
use App\Http\Requests\UpdateCalTypeRequest;
use App\Http\Resources\Admin\CalTypeResource;
use App\Models\CalType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalTypeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalTypeResource(CalType::all());
    }

    public function store(StoreCalTypeRequest $request)
    {
        $calType = CalType::create($request->all());

        return (new CalTypeResource($calType))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CalType $calType)
    {
        abort_if(Gate::denies('cal_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalTypeResource($calType);
    }

    public function update(UpdateCalTypeRequest $request, CalType $calType)
    {
        $calType->update($request->all());

        return (new CalTypeResource($calType))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CalType $calType)
    {
        abort_if(Gate::denies('cal_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calType->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
