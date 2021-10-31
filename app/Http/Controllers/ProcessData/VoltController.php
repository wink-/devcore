<?php

namespace App\Http\Controllers\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVoltRequest;
use App\Http\Requests\StoreVoltRequest;
use App\Http\Requests\UpdateVoltRequest;
use App\Models\ProcessData\Record;
use App\Models\ProcessData\Volt;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VoltController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('process_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $volts = Volt::with(['record'])->get();

        return view('admin.volts.index', compact('volts'));
    }

    public function create()
    {
        abort_if(Gate::denies('process_data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $records = Record::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.volts.create', compact('records'));
    }

    public function store(StoreVoltRequest $request)
    {
        $volt = Volt::create($request->all());

        return redirect()->route('admin.volts.index');
    }

    public function edit(Volt $volt)
    {
        abort_if(Gate::denies('process_data_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $records = Record::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $volt->load('record');

        return view('admin.volts.edit', compact('records', 'volt'));
    }

    public function update(UpdateVoltRequest $request, Volt $volt)
    {
        $volt->update($request->all());

        return redirect()->route('admin.volts.index');
    }

    public function show(Volt $volt)
    {
        abort_if(Gate::denies('process_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $volt->load('record');

        return view('admin.volts.show', compact('volt'));
    }

    public function destroy(Volt $volt)
    {
        abort_if(Gate::denies('process_data_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $volt->delete();

        return back();
    }

    public function massDestroy(MassDestroyVoltRequest $request)
    {
        Volt::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
