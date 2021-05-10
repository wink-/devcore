<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalSourceRequest;
use App\Http\Requests\UpdateCalSourceRequest;
use App\Http\Resources\Admin\CalSourceResource;
use App\Models\CalSource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalSourceApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_source_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalSourceResource(CalSource::all());
    }

    public function store(StoreCalSourceRequest $request)
    {
        $calSource = CalSource::create($request->all());

        return (new CalSourceResource($calSource))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CalSource $calSource)
    {
        abort_if(Gate::denies('cal_source_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalSourceResource($calSource);
    }

    public function update(UpdateCalSourceRequest $request, CalSource $calSource)
    {
        $calSource->update($request->all());

        return (new CalSourceResource($calSource))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CalSource $calSource)
    {
        abort_if(Gate::denies('cal_source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calSource->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
