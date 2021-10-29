<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormTypeRequest;
use App\Http\Requests\UpdateFormTypeRequest;
use App\Http\Resources\Admin\FormTypeResource;
use App\Models\FormType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormTypeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormTypeResource(FormType::all());
    }

    public function store(StoreFormTypeRequest $request)
    {
        $formType = FormType::create($request->all());

        return (new FormTypeResource($formType))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FormType $formType)
    {
        abort_if(Gate::denies('form_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormTypeResource($formType);
    }

    public function update(UpdateFormTypeRequest $request, FormType $formType)
    {
        $formType->update($request->all());

        return (new FormTypeResource($formType))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FormType $formType)
    {
        abort_if(Gate::denies('form_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formType->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
