<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormValueNameRequest;
use App\Http\Requests\UpdateFormValueNameRequest;
use App\Http\Resources\Admin\FormValueNameResource;
use App\Models\FormValueName;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormValueNameApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_value_name_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueNameResource(FormValueName::all());
    }

    public function store(StoreFormValueNameRequest $request)
    {
        $formValueName = FormValueName::create($request->all());

        return (new FormValueNameResource($formValueName))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FormValueName $formValueName)
    {
        abort_if(Gate::denies('form_value_name_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueNameResource($formValueName);
    }

    public function update(UpdateFormValueNameRequest $request, FormValueName $formValueName)
    {
        $formValueName->update($request->all());

        return (new FormValueNameResource($formValueName))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FormValueName $formValueName)
    {
        abort_if(Gate::denies('form_value_name_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueName->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
