<?php

namespace App\Http\Controllers\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessData\MassDestroyVoltRequest;
use App\Http\Requests\ProcessData\StoreVoltRequest;
use App\Http\Requests\ProcessData\UpdateVoltRequest;
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

        return view('processData.volts.index', compact('volts'));
    }

    public function create()
    {
        abort_if(Gate::denies('process_data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $records = Record::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('processData.volts.create', compact('records'));
    }

    public function store(StoreVoltRequest $request)
    {
        $volt = Volt::create($request->all());

        return redirect()->route('processData.volts.index');
    }

    public function edit(Volt $volt)
    {
        abort_if(Gate::denies('process_data_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $records = Record::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $volt->load('record');

        return view('processData.volts.edit', compact('records', 'volt'));
    }

    public function update(UpdateVoltRequest $request, Volt $volt)
    {
        $volt->update($request->all());

        return redirect()->route('processData.volts.index');
    }

    public function show(Volt $volt)
    {
        abort_if(Gate::denies('process_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $volt->load('record');

        return view('processData.volts.show', compact('volt'));
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
