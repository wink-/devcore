<?php

namespace App\Http\Controllers\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTemperatureRequest;
use App\Http\Requests\StoreTemperatureRequest;
use App\Http\Requests\UpdateTemperatureRequest;
use App\Models\ProcessData\PdRecord;
use App\Models\ProcessData\Temperature;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TemperatureController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('process_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $temperatures = Temperature::with(['record'])->get();

        return view('admin.temperatures.index', compact('temperatures'));
    }

    public function create()
    {
        abort_if(Gate::denies('process_data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $records = PdRecord::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.temperatures.create', compact('records'));
    }

    public function store(StoreTemperatureRequest $request)
    {
        $temperature = Temperature::create($request->all());

        return redirect()->route('admin.temperatures.index');
    }

    public function edit(Temperature $temperature)
    {
        abort_if(Gate::denies('process_data_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $records = PdRecord::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $temperature->load('record');

        return view('admin.temperatures.edit', compact('records', 'temperature'));
    }

    public function update(UpdateTemperatureRequest $request, Temperature $temperature)
    {
        $temperature->update($request->all());

        return redirect()->route('admin.temperatures.index');
    }

    public function show(Temperature $temperature)
    {
        abort_if(Gate::denies('process_data_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $temperature->load('record');

        return view('admin.temperatures.show', compact('temperature'));
    }

    public function destroy(Temperature $temperature)
    {
        abort_if(Gate::denies('process_data_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $temperature->delete();

        return back();
    }

    public function massDestroy(MassDestroyTemperatureRequest $request)
    {
        Temperature::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
