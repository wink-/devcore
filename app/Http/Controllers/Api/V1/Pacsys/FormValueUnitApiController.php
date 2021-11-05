<?php

namespace App\Http\Controllers\Api\V1\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\StoreFormValueUnitRequest;
use App\Http\Requests\Pacsys\UpdateFormValueUnitRequest;
use App\Http\Resources\Pacsys\FormValueUnitResource;
use App\Models\FormValueUnit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormValueUnitApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_value_unit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueUnitResource(FormValueUnit::all());
    }

    public function store(StoreFormValueUnitRequest $request)
    {
        $formValueUnit = FormValueUnit::create($request->all());

        return (new FormValueUnitResource($formValueUnit))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FormValueUnit $formValueUnit)
    {
        abort_if(Gate::denies('form_value_unit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueUnitResource($formValueUnit);
    }

    public function update(UpdateFormValueUnitRequest $request, FormValueUnit $formValueUnit)
    {
        $formValueUnit->update($request->all());

        return (new FormValueUnitResource($formValueUnit))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FormValueUnit $formValueUnit)
    {
        abort_if(Gate::denies('form_value_unit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueUnit->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
