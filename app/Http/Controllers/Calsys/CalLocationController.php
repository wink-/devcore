<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCalLocationRequest;
use App\Http\Requests\StoreCalLocationRequest;
use App\Http\Requests\UpdateCalLocationRequest;
use App\Models\CalLocation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalLocationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_location_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calLocations = CalLocation::all();

        return view('admin.calLocations.index', compact('calLocations'));
    }

    public function create()
    {
        abort_if(Gate::denies('cal_location_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calLocations.create');
    }

    public function store(StoreCalLocationRequest $request)
    {
        $calLocation = CalLocation::create($request->all());

        return redirect()->route('admin.cal-locations.index');
    }

    public function edit(CalLocation $calLocation)
    {
        abort_if(Gate::denies('cal_location_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calLocations.edit', compact('calLocation'));
    }

    public function update(UpdateCalLocationRequest $request, CalLocation $calLocation)
    {
        $calLocation->update($request->all());

        return redirect()->route('admin.cal-locations.index');
    }

    public function show(CalLocation $calLocation)
    {
        abort_if(Gate::denies('cal_location_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calLocations.show', compact('calLocation'));
    }

    public function destroy(CalLocation $calLocation)
    {
        abort_if(Gate::denies('cal_location_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calLocation->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalLocationRequest $request)
    {
        CalLocation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
