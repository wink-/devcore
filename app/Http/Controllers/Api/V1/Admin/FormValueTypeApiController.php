<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormValueTypeRequest;
use App\Http\Requests\UpdateFormValueTypeRequest;
use App\Http\Resources\Admin\FormValueTypeResource;
use App\Models\FormValueType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormValueTypeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_value_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueTypeResource(FormValueType::all());
    }

    public function store(StoreFormValueTypeRequest $request)
    {
        $formValueType = FormValueType::create($request->all());

        return (new FormValueTypeResource($formValueType))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FormValueType $formValueType)
    {
        abort_if(Gate::denies('form_value_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueTypeResource($formValueType);
    }

    public function update(UpdateFormValueTypeRequest $request, FormValueType $formValueType)
    {
        $formValueType->update($request->all());

        return (new FormValueTypeResource($formValueType))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FormValueType $formValueType)
    {
        abort_if(Gate::denies('form_value_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueType->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
