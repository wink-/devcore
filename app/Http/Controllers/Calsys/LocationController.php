<?php

namespace App\Http\Controllers\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\MassDestroyLocationRequest;
use App\Http\Requests\Calsys\StoreLocationRequest;
use App\Http\Requests\Calsys\UpdateLocationRequest;
use App\Models\Calsys\location;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class locationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $locations = Location::all();

        return view('calsys.locations.index', compact('locations'));
    }

    public function create()
    {
        abort_if(Gate::denies('calsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.locations.create');
    }

    public function store(StorelocationRequest $request)
    {
        $location = Location::create($request->all());

        return redirect()->route('calsys.locations.index');
    }

    public function edit(Location $location)
    {
        abort_if(Gate::denies('calsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.locations.edit', compact('location'));
    }

    public function update(UpdatelocationRequest $request, location $location)
    {
        $location->update($request->all());

        return redirect()->route('admin.cal-locations.index');
    }

    public function show(location $location)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.locations.show', compact('location'));
    }

    public function destroy(location $location)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $location->delete();

        return back();
    }

    public function massDestroy(MassDestroylocationRequest $request)
    {
        location::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
