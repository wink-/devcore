<?php

namespace App\Http\Controllers\Api\V1\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\StoreFormValueRangeRequest;
use App\Http\Requests\Pacsys\UpdateFormValueRangeRequest;
use App\Http\Resources\Pacsys\FormValueRangeResource;
use App\Models\FormValueRange;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormValueRangeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_value_range_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueRangeResource(FormValueRange::all());
    }

    public function store(StoreFormValueRangeRequest $request)
    {
        $formValueRange = FormValueRange::create($request->all());

        return (new FormValueRangeResource($formValueRange))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FormValueRange $formValueRange)
    {
        abort_if(Gate::denies('form_value_range_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueRangeResource($formValueRange);
    }

    public function update(UpdateFormValueRangeRequest $request, FormValueRange $formValueRange)
    {
        $formValueRange->update($request->all());

        return (new FormValueRangeResource($formValueRange))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FormValueRange $formValueRange)
    {
        abort_if(Gate::denies('form_value_range_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueRange->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
