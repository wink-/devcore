<?php

namespace App\Http\Controllers\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessData\MassDestroyUnitRequest;
use App\Http\Requests\ProcessData\StoreUnitRequest;
use App\Http\Requests\ProcessData\UpdateUnitRequest;
use App\Models\ProcessData\Unit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UnitsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('process_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $units = Unit::all();

        return view('processData.units.index', compact('units'));
    }

    public function create()
    {
        abort_if(Gate::denies('process_data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('processData.units.create');
    }

    public function store(StoreUnitRequest $request)
    {
        $unit = Unit::create($request->all());

        return redirect()->route('processData.units.index');
    }

    public function edit(Unit $Unit)
    {
        abort_if(Gate::denies('process_data_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('processData.units.edit', compact('unit'));
    }

    public function update(UpdateUnitRequest $request, Unit $Unit)
    {
        $Unit->update($request->all());

        return redirect()->route('processData.units.index');
    }

    public function show(Unit $Unit)
    {
        abort_if(Gate::denies('process_data_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('processData.units.show', compact('Unit'));
    }

    public function destroy(Unit $Unit)
    {
        abort_if(Gate::denies('process_data_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $Unit->delete();

        return back();
    }

    public function massDestroy(MassDestroyUnitRequest $request)
    {
        Unit::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
