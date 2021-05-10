<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalcValueRequest;
use App\Http\Requests\UpdateCalcValueRequest;
use App\Http\Resources\Admin\CalcValueResource;
use App\Models\CalcValue;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalcValueApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calc_value_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalcValueResource(CalcValue::all());
    }

    public function store(StoreCalcValueRequest $request)
    {
        $calcValue = CalcValue::create($request->all());

        return (new CalcValueResource($calcValue))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CalcValue $calcValue)
    {
        abort_if(Gate::denies('calc_value_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalcValueResource($calcValue);
    }

    public function update(UpdateCalcValueRequest $request, CalcValue $calcValue)
    {
        $calcValue->update($request->all());

        return (new CalcValueResource($calcValue))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CalcValue $calcValue)
    {
        abort_if(Gate::denies('calc_value_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calcValue->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
