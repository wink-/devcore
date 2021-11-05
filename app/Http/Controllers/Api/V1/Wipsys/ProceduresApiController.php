<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreProcedureRequest;
use App\Http\Requests\Wipsys\UpdateProcedureRequest;
use App\Http\Resources\Wipsys\ProcedureResource;
use App\Models\Wipsys\Procedure;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProceduresApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('procedure_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProcedureResource(Procedure::all());
    }

    public function store(StoreProcedureRequest $request)
    {
        $procedure = Procedure::create($request->all());

        return (new ProcedureResource($procedure))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Procedure $procedure)
    {
        abort_if(Gate::denies('procedure_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProcedureResource($procedure);
    }

    public function update(UpdateProcedureRequest $request, Procedure $procedure)
    {
        $procedure->update($request->all());

        return (new ProcedureResource($procedure))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Procedure $procedure)
    {
        abort_if(Gate::denies('procedure_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $procedure->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
