<?php

namespace App\Http\Controllers\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessData\MassDestroyLoggerTypeRequest;
use App\Http\Requests\ProcessData\StoreLoggerTypeRequest;
use App\Http\Requests\ProcessData\UpdateLoggerTypeRequest;
use App\Models\ProcessData\LoggerType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoggerTypesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('process_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loggerTypes = LoggerType::all();

        return view('processData.loggerTypes.index', compact('loggerTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('process_data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('processData.loggerTypes.create');
    }

    public function store(StoreLoggerTypeRequest $request)
    {
        $loggerType = LoggerType::create($request->all());

        return redirect()->route('processData.logger-types.index');
    }

    public function edit(LoggerType $loggerType)
    {
        abort_if(Gate::denies('process_data_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('processData.loggerTypes.edit', compact('loggerType'));
    }

    public function update(UpdateLoggerTypeRequest $request, LoggerType $loggerType)
    {
        $loggerType->update($request->all());

        return redirect()->route('processData.logger-types.index');
    }

    public function show(LoggerType $loggerType)
    {
        abort_if(Gate::denies('process_data_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('processData.loggerTypes.show', compact('loggerType'));
    }

    public function destroy(LoggerType $loggerType)
    {
        abort_if(Gate::denies('process_data_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loggerType->delete();

        return back();
    }

    public function massDestroy(MassDestroyLoggerTypeRequest $request)
    {
        LoggerType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
