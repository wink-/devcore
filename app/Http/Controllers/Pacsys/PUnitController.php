<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPUnitRequest;
use App\Http\Requests\StorePUnitRequest;
use App\Http\Requests\UpdatePUnitRequest;
use App\Models\PUnit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PUnitController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('p_unit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pUnits = PUnit::all();

        return view('admin.pUnits.index', compact('pUnits'));
    }

    public function create()
    {
        abort_if(Gate::denies('p_unit_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pUnits.create');
    }

    public function store(StorePUnitRequest $request)
    {
        $pUnit = PUnit::create($request->all());

        return redirect()->route('admin.p-units.index');
    }

    public function edit(PUnit $pUnit)
    {
        abort_if(Gate::denies('p_unit_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pUnits.edit', compact('pUnit'));
    }

    public function update(UpdatePUnitRequest $request, PUnit $pUnit)
    {
        $pUnit->update($request->all());

        return redirect()->route('admin.p-units.index');
    }

    public function show(PUnit $pUnit)
    {
        abort_if(Gate::denies('p_unit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pUnits.show', compact('pUnit'));
    }

    public function destroy(PUnit $pUnit)
    {
        abort_if(Gate::denies('p_unit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pUnit->delete();

        return back();
    }

    public function massDestroy(MassDestroyPUnitRequest $request)
    {
        PUnit::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
