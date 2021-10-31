<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFreightRequest;
use App\Http\Requests\StoreFreightRequest;
use App\Http\Requests\UpdateFreightRequest;
use App\Models\Wipsys\Freight;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FreightController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('freight_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $freights = Freight::all();

        return view('admin.freights.index', compact('freights'));
    }

    public function create()
    {
        abort_if(Gate::denies('freight_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.freights.create');
    }

    public function store(StoreFreightRequest $request)
    {
        $freight = Freight::create($request->all());

        return redirect()->route('admin.freights.index');
    }

    public function edit(Freight $freight)
    {
        abort_if(Gate::denies('freight_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.freights.edit', compact('freight'));
    }

    public function update(UpdateFreightRequest $request, Freight $freight)
    {
        $freight->update($request->all());

        return redirect()->route('admin.freights.index');
    }

    public function show(Freight $freight)
    {
        abort_if(Gate::denies('freight_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.freights.show', compact('freight'));
    }

    public function destroy(Freight $freight)
    {
        abort_if(Gate::denies('freight_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $freight->delete();

        return back();
    }

    public function massDestroy(MassDestroyFreightRequest $request)
    {
        Freight::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
