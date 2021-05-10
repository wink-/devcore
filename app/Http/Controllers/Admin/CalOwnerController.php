<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCalOwnerRequest;
use App\Http\Requests\StoreCalOwnerRequest;
use App\Http\Requests\UpdateCalOwnerRequest;
use App\Models\CalOwner;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalOwnerController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_owner_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calOwners = CalOwner::all();

        return view('admin.calOwners.index', compact('calOwners'));
    }

    public function create()
    {
        abort_if(Gate::denies('cal_owner_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calOwners.create');
    }

    public function store(StoreCalOwnerRequest $request)
    {
        $calOwner = CalOwner::create($request->all());

        return redirect()->route('admin.cal-owners.index');
    }

    public function edit(CalOwner $calOwner)
    {
        abort_if(Gate::denies('cal_owner_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calOwners.edit', compact('calOwner'));
    }

    public function update(UpdateCalOwnerRequest $request, CalOwner $calOwner)
    {
        $calOwner->update($request->all());

        return redirect()->route('admin.cal-owners.index');
    }

    public function show(CalOwner $calOwner)
    {
        abort_if(Gate::denies('cal_owner_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calOwners.show', compact('calOwner'));
    }

    public function destroy(CalOwner $calOwner)
    {
        abort_if(Gate::denies('cal_owner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calOwner->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalOwnerRequest $request)
    {
        CalOwner::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
