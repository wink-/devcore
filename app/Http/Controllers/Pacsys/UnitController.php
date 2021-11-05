<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyUnitRequest;
use App\Http\Requests\Pacsys\StoreUnitRequest;
use App\Http\Requests\Pacsys\UpdateUnitRequest;
use App\Models\Pacsys\Pacsys\Unit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UnitController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pacsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $units = Unit::all();

        return view('pacsys.units.index', compact('pUnits'));
    }

    public function create()
    {
        abort_if(Gate::denies('pacsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.units.create');
    }

    public function store(StorePUnitRequest $request)
    {
        $unit = PUnit::create($request->all());

        return redirect()->route('pacsys.units.index');
    }

    public function edit(Unit $unit)
    {
        abort_if(Gate::denies('pacsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.units.edit', compact('unit'));
    }

    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        $pUnit->update($request->all());

        return redirect()->route('pacsys.units.index');
    }

    public function show(Unit $unit)
    {
        abort_if(Gate::denies('pacsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.units.show', compact('unit'));
    }

    public function destroy(Unit $unit)
    {
        abort_if(Gate::denies('pacsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $unit->delete();

        return back();
    }

    public function massDestroy(MassDestroyUnitRequest $request)
    {
        Unit::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
