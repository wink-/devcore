<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVoltRequest;
use App\Http\Requests\UpdateVoltRequest;
use App\Http\Resources\Admin\VoltResource;
use App\Models\Volt;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VoltApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('volt_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VoltResource(Volt::with(['record'])->get());
    }

    public function store(StoreVoltRequest $request)
    {
        $volt = Volt::create($request->all());

        return (new VoltResource($volt))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Volt $volt)
    {
        abort_if(Gate::denies('volt_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VoltResource($volt->load(['record']));
    }

    public function update(UpdateVoltRequest $request, Volt $volt)
    {
        $volt->update($request->all());

        return (new VoltResource($volt))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Volt $volt)
    {
        abort_if(Gate::denies('volt_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $volt->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
