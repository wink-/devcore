<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\MassDestroyPriorityRequest;
use App\Http\Requests\Wipsys\StorePriorityRequest;
use App\Http\Requests\Wipsys\UpdatePriorityRequest;
use App\Models\Wipsys\Priority;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PrioritiesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $priorities = Priority::all();

        return view('admin.priorities.index', compact('priorities'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priorities.create');
    }

    public function store(StorePriorityRequest $request)
    {
        $priority = Priority::create($request->all());

        return redirect()->route('admin.priorities.index');
    }

    public function edit(Priority $priority)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priorities.edit', compact('priority'));
    }

    public function update(UpdatePriorityRequest $request, Priority $priority)
    {
        $priority->update($request->all());

        return redirect()->route('admin.priorities.index');
    }

    public function show(Priority $priority)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priorities.show', compact('priority'));
    }

    public function destroy(Priority $priority)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $priority->delete();

        return back();
    }

    public function massDestroy(MassDestroyPriorityRequest $request)
    {
        Priority::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
