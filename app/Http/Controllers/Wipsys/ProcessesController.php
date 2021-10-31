<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProcessRequest;
use App\Http\Requests\StoreProcessRequest;
use App\Http\Requests\UpdateProcessRequest;
use App\Models\Wipsys\Process;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProcessesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $processes = Process::all();

        return view('admin.processes.index', compact('processes'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.processes.create');
    }

    public function store(StoreProcessRequest $request)
    {
        $process = Process::create($request->all());

        return redirect()->route('admin.processes.index');
    }

    public function edit(Process $process)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.processes.edit', compact('process'));
    }

    public function update(UpdateProcessRequest $request, Process $process)
    {
        $process->update($request->all());

        return redirect()->route('admin.processes.index');
    }

    public function show(Process $process)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $process->load('processQuotes');

        return view('admin.processes.show', compact('process'));
    }

    public function destroy(Process $process)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $process->delete();

        return back();
    }

    public function massDestroy(MassDestroyProcessRequest $request)
    {
        Process::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
