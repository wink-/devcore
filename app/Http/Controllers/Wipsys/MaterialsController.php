<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\MassDestroyMaterialRequest;
use App\Http\Requests\Wipsys\StoreMaterialRequest;
use App\Http\Requests\Wipsys\UpdateMaterialRequest;
use App\Models\Wipsys\Material;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MaterialsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $materials = Material::all();

        return view('admin.materials.index', compact('materials'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.materials.create');
    }

    public function store(StoreMaterialRequest $request)
    {
        $material = Material::create($request->all());

        return redirect()->route('admin.materials.index');
    }

    public function edit(Material $material)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.materials.edit', compact('material'));
    }

    public function update(UpdateMaterialRequest $request, Material $material)
    {
        $material->update($request->all());

        return redirect()->route('admin.materials.index');
    }

    public function show(Material $material)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.materials.show', compact('material'));
    }

    public function destroy(Material $material)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $material->delete();

        return back();
    }

    public function massDestroy(MassDestroyMaterialRequest $request)
    {
        Material::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
