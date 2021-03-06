<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\MassDestroyWorkgroupRequest;
use App\Http\Requests\Wipsys\StoreWorkgroupRequest;
use App\Http\Requests\Wipsys\UpdateWorkgroupRequest;
use App\Models\Wipsys\Workgroup;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkgroupsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workgroups = Workgroup::all();

        return view('admin.workgroups.index', compact('workgroups'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workgroups.create');
    }

    public function store(StoreWorkgroupRequest $request)
    {
        $workgroup = Workgroup::create($request->all());

        return redirect()->route('admin.workgroups.index');
    }

    public function edit(Workgroup $workgroup)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workgroups.edit', compact('workgroup'));
    }

    public function update(UpdateWorkgroupRequest $request, Workgroup $workgroup)
    {
        $workgroup->update($request->all());

        return redirect()->route('admin.workgroups.index');
    }

    public function show(Workgroup $workgroup)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workgroups.show', compact('workgroup'));
    }

    public function destroy(Workgroup $workgroup)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workgroup->delete();

        return back();
    }

    public function massDestroy(MassDestroyWorkgroupRequest $request)
    {
        Workgroup::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
