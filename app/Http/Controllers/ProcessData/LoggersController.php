<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLoggerRequest;
use App\Http\Requests\StoreLoggerRequest;
use App\Http\Requests\UpdateLoggerRequest;
use App\Models\Logger;
use App\Models\LoggerType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoggersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('logger_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loggers = Logger::with(['logger_type'])->get();

        return view('admin.loggers.index', compact('loggers'));
    }

    public function create()
    {
        abort_if(Gate::denies('logger_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $logger_types = LoggerType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.loggers.create', compact('logger_types'));
    }

    public function store(StoreLoggerRequest $request)
    {
        $logger = Logger::create($request->all());

        return redirect()->route('admin.loggers.index');
    }

    public function edit(Logger $logger)
    {
        abort_if(Gate::denies('logger_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $logger_types = LoggerType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $logger->load('logger_type');

        return view('admin.loggers.edit', compact('logger_types', 'logger'));
    }

    public function update(UpdateLoggerRequest $request, Logger $logger)
    {
        $logger->update($request->all());

        return redirect()->route('admin.loggers.index');
    }

    public function show(Logger $logger)
    {
        abort_if(Gate::denies('logger_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $logger->load('logger_type');

        return view('admin.loggers.show', compact('logger'));
    }

    public function destroy(Logger $logger)
    {
        abort_if(Gate::denies('logger_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $logger->delete();

        return back();
    }

    public function massDestroy(MassDestroyLoggerRequest $request)
    {
        Logger::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
