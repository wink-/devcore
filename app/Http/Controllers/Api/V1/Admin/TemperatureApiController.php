<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTemperatureRequest;
use App\Http\Requests\UpdateTemperatureRequest;
use App\Http\Resources\Admin\TemperatureResource;
use App\Models\Temperature;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TemperatureApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('temperature_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TemperatureResource(Temperature::with(['record'])->get());
    }

    public function store(StoreTemperatureRequest $request)
    {
        $temperature = Temperature::create($request->all());

        return (new TemperatureResource($temperature))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Temperature $temperature)
    {
        abort_if(Gate::denies('temperature_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TemperatureResource($temperature->load(['record']));
    }

    public function update(UpdateTemperatureRequest $request, Temperature $temperature)
    {
        $temperature->update($request->all());

        return (new TemperatureResource($temperature))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Temperature $temperature)
    {
        abort_if(Gate::denies('temperature_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $temperature->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
