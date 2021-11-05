<?php

namespace App\Http\Controllers\Api\V1\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\StoreValidationRequest;
use App\Http\Requests\Pacsys\UpdateValidationRequest;
use App\Http\Resources\Pacsys\ValidationResource;
use App\Models\Validation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidationApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('validation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ValidationResource(Validation::all());
    }

    public function store(StoreValidationRequest $request)
    {
        $validation = Validation::create($request->all());

        return (new ValidationResource($validation))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Validation $validation)
    {
        abort_if(Gate::denies('validation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ValidationResource($validation);
    }

    public function update(UpdateValidationRequest $request, Validation $validation)
    {
        $validation->update($request->all());

        return (new ValidationResource($validation))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Validation $validation)
    {
        abort_if(Gate::denies('validation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $validation->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
