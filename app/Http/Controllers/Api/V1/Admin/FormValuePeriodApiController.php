<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormValuePeriodRequest;
use App\Http\Requests\UpdateFormValuePeriodRequest;
use App\Http\Resources\Admin\FormValuePeriodResource;
use App\Models\FormValuePeriod;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormValuePeriodApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_value_period_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValuePeriodResource(FormValuePeriod::all());
    }

    public function store(StoreFormValuePeriodRequest $request)
    {
        $formValuePeriod = FormValuePeriod::create($request->all());

        return (new FormValuePeriodResource($formValuePeriod))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FormValuePeriod $formValuePeriod)
    {
        abort_if(Gate::denies('form_value_period_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValuePeriodResource($formValuePeriod);
    }

    public function update(UpdateFormValuePeriodRequest $request, FormValuePeriod $formValuePeriod)
    {
        $formValuePeriod->update($request->all());

        return (new FormValuePeriodResource($formValuePeriod))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FormValuePeriod $formValuePeriod)
    {
        abort_if(Gate::denies('form_value_period_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValuePeriod->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
