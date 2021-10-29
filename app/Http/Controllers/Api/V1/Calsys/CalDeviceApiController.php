<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalDeviceRequest;
use App\Http\Requests\UpdateCalDeviceRequest;
use App\Http\Resources\Admin\CalDeviceResource;
use App\Models\CalDevice;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalDeviceApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_device_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalDeviceResource(CalDevice::with(['source', 'type', 'period', 'location', 'owner'])->get());
    }

    public function store(StoreCalDeviceRequest $request)
    {
        $calDevice = CalDevice::create($request->all());

        return (new CalDeviceResource($calDevice))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CalDevice $calDevice)
    {
        abort_if(Gate::denies('cal_device_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalDeviceResource($calDevice->load(['source', 'type', 'period', 'location', 'owner']));
    }

    public function update(UpdateCalDeviceRequest $request, CalDevice $calDevice)
    {
        $calDevice->update($request->all());

        return (new CalDeviceResource($calDevice))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CalDevice $calDevice)
    {
        abort_if(Gate::denies('cal_device_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calDevice->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
