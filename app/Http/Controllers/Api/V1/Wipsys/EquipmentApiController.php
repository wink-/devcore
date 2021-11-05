<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreEquipmentRequest;
use App\Http\Requests\Wipsys\UpdateEquipmentRequest;
use App\Http\Resources\Wipsys\EquipmentResource;
use App\Models\Wipsys\Equipment;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EquipmentApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('equipment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EquipmentResource(Equipment::all());
    }

    public function store(StoreEquipmentRequest $request)
    {
        $equipment = Equipment::create($request->all());

        return (new EquipmentResource($equipment))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Equipment $equipment)
    {
        abort_if(Gate::denies('equipment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EquipmentResource($equipment);
    }

    public function update(UpdateEquipmentRequest $request, Equipment $equipment)
    {
        $equipment->update($request->all());

        return (new EquipmentResource($equipment))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
