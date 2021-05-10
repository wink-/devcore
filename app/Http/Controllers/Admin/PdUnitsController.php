<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPdUnitRequest;
use App\Http\Requests\StorePdUnitRequest;
use App\Http\Requests\UpdatePdUnitRequest;
use App\Models\PdUnit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PdUnitsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pd_unit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pdUnits = PdUnit::all();

        return view('admin.pdUnits.index', compact('pdUnits'));
    }

    public function create()
    {
        abort_if(Gate::denies('pd_unit_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pdUnits.create');
    }

    public function store(StorePdUnitRequest $request)
    {
        $pdUnit = PdUnit::create($request->all());

        return redirect()->route('admin.pd-units.index');
    }

    public function edit(PdUnit $pdUnit)
    {
        abort_if(Gate::denies('pd_unit_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pdUnits.edit', compact('pdUnit'));
    }

    public function update(UpdatePdUnitRequest $request, PdUnit $pdUnit)
    {
        $pdUnit->update($request->all());

        return redirect()->route('admin.pd-units.index');
    }

    public function show(PdUnit $pdUnit)
    {
        abort_if(Gate::denies('pd_unit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pdUnits.show', compact('pdUnit'));
    }

    public function destroy(PdUnit $pdUnit)
    {
        abort_if(Gate::denies('pd_unit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pdUnit->delete();

        return back();
    }

    public function massDestroy(MassDestroyPdUnitRequest $request)
    {
        PdUnit::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
