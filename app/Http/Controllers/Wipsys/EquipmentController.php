<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEquipmentRequest;
use App\Http\Requests\UpdateEquipmentRequest;
use App\Models\Wipsys\Equipment;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EquipmentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $equipment = Equipment::all();

        return view('admin.equipment.index', compact('equipment'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.equipment.create');
    }

    public function store(StoreEquipmentRequest $request)
    {
        $equipment = Equipment::create($request->all());

        return redirect()->route('admin.equipment.index');
    }

    public function edit(Equipment $equipment)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.equipment.edit', compact('equipment'));
    }

    public function update(UpdateEquipmentRequest $request, Equipment $equipment)
    {
        $equipment->update($request->all());

        return redirect()->route('admin.equipment.index');
    }

    public function show(Equipment $equipment)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.equipment.show', compact('equipment'));
    }
}
