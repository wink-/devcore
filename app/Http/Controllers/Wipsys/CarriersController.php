<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\MassDestroyCarrierRequest;
use App\Http\Requests\Wipsys\StoreCarrierRequest;
use App\Http\Requests\Wipsys\UpdateCarrierRequest;
use App\Models\Wipsys\Carrier;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CarriersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $carriers = Carrier::all();

        return view('admin.carriers.index', compact('carriers'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.carriers.create');
    }

    public function store(StoreCarrierRequest $request)
    {
        $carrier = Carrier::create($request->all());

        return redirect()->route('admin.carriers.index');
    }

    public function edit(Carrier $carrier)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.carriers.edit', compact('carrier'));
    }

    public function update(UpdateCarrierRequest $request, Carrier $carrier)
    {
        $carrier->update($request->all());

        return redirect()->route('admin.carriers.index');
    }

    public function show(Carrier $carrier)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.carriers.show', compact('carrier'));
    }

    public function destroy(Carrier $carrier)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $carrier->delete();

        return back();
    }

    public function massDestroy(MassDestroyCarrierRequest $request)
    {
        Carrier::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
