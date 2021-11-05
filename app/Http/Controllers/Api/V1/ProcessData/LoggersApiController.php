<?php

namespace App\Http\Controllers\Api\V1\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessData\StoreLoggerRequest;
use App\Http\Requests\ProcessData\UpdateLoggerRequest;
use App\Http\Resources\ProcessData\LoggerResource;
use App\Models\ProcessData\Logger;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoggersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('logger_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LoggerResource(Logger::with(['logger_type'])->get());
    }

    public function store(StoreLoggerRequest $request)
    {
        $logger = Logger::create($request->all());

        return (new LoggerResource($logger))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Logger $logger)
    {
        abort_if(Gate::denies('logger_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LoggerResource($logger->load(['logger_type']));
    }

    public function update(UpdateLoggerRequest $request, Logger $logger)
    {
        $logger->update($request->all());

        return (new LoggerResource($logger))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Logger $logger)
    {
        abort_if(Gate::denies('logger_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $logger->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
