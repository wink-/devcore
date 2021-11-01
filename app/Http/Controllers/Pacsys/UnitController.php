<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyPUnitRequest;
use App\Http\Requests\Pacsys\StorePUnitRequest;
use App\Http\Requests\Pacsys\UpdatePUnitRequest;
use App\Models\Pacsys\Unit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PUnitController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('p_unit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $units = Unit::all();

        return view('pacsys.pUnits.index', compact('pUnits'));
    }

    public function create()
    {
        abort_if(Gate::denies('p_unit_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.units.create');
    }

    public function store(StorePUnitRequest $request)
    {
        $unit = PUnit::create($request->all());

        return redirect()->route('pacsys.units.index');
    }

    public function edit(PUnit $pUnit)
    {
        abort_if(Gate::denies('p_unit_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.pUnits.edit', compact('pUnit'));
    }

    public function update(UpdatePUnitRequest $request, PUnit $pUnit)
    {
        $pUnit->update($request->all());

        return redirect()->route('pacsys.p-units.index');
    }

    public function show(PUnit $pUnit)
    {
        abort_if(Gate::denies('p_unit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.pUnits.show', compact('pUnit'));
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
