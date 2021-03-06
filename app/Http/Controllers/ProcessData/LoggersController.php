<?php

namespace App\Http\Controllers\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessData\MassDestroyLoggerRequest;
use App\Http\Requests\ProcessData\StoreLoggerRequest;
use App\Http\Requests\ProcessData\UpdateLoggerRequest;
use App\Models\ProcessData\Logger;
use App\Models\ProcessData\LoggerType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoggersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('process_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loggers = Logger::with(['process_data_type'])->get();

        return view('processData.loggers.index', compact('loggers'));
    }

    public function create()
    {
        abort_if(Gate::denies('process_data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $process_data_types = LoggerType::all()->pluck('name', 'id')->prepend('Please Select', '');

        return view('processData.loggers.create', compact('process_data_types'));
    }

    public function store(StoreLoggerRequest $request)
    {
        $logger = Logger::create($request->all());

        return redirect()->route('processData.loggers.index');
    }

    public function edit(Logger $logger)
    {
        abort_if(Gate::denies('process_data_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $process_data_types = LoggerType::all()->pluck('name', 'id')->prepend('Please Select', '');

        $logger->load('process_data_type');

        return view('processData.loggers.edit', compact('process_data_types', 'logger'));
    }

    public function update(UpdateLoggerRequest $request, Logger $logger)
    {
        $logger->update($request->all());

        return redirect()->route('processData.loggers.index');
    }

    public function show(Logger $logger)
    {
        abort_if(Gate::denies('process_data_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $logger->load('process_data_type');

        return view('processData.loggers.show', compact('logger'));
    }

    public function destroy(Logger $logger)
    {
        abort_if(Gate::denies('process_data_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $logger->delete();

        return back();
    }

    public function massDestroy(MassDestroyLoggerRequest $request)
    {
        Logger::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
