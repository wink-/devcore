<?php

namespace App\Http\Controllers\Api\V1\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessData\StoreLoggerTypeRequest;
use App\Http\Requests\ProcessData\UpdateLoggerTypeRequest;
use App\Http\Resources\ProcessData\LoggerTypeResource;
use App\Models\ProcessData\LoggerType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoggerTypesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('logger_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LoggerTypeResource(LoggerType::all());
    }

    public function store(StoreLoggerTypeRequest $request)
    {
        $loggerType = LoggerType::create($request->all());

        return (new LoggerTypeResource($loggerType))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(LoggerType $loggerType)
    {
        abort_if(Gate::denies('logger_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LoggerTypeResource($loggerType);
    }

    public function update(UpdateLoggerTypeRequest $request, LoggerType $loggerType)
    {
        $loggerType->update($request->all());

        return (new LoggerTypeResource($loggerType))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(LoggerType $loggerType)
    {
        abort_if(Gate::denies('logger_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loggerType->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
