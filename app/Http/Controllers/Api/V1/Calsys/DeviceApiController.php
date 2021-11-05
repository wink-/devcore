<?php

namespace App\Http\Controllers\Api\V1\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\StoreDeviceRequest;
use App\Http\Requests\Calsys\UpdateDeviceRequest;
use App\Http\Resources\Calsys\DeviceResource;
use App\Models\Calsys\Device;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DeviceApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DeviceResource(Device::with(['source', 'type', 'period', 'location', 'owner'])->get());
    }

    public function store(StoreDeviceRequest $request)
    {
        $device = Device::create($request->all());

        return (new DeviceResource($device))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Device $device)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DeviceResource($device->load(['source', 'type', 'period', 'location', 'owner']));
    }

    public function update(UpdateDeviceRequest $request, Device $device)
    {
        $device->update($request->all());

        return (new DeviceResource($device))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Device $device)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $device->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
