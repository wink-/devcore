<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalemployeeRequest;
use App\Http\Requests\UpdateCalemployeeRequest;
use App\Http\Resources\Admin\CalemployeeResource;
use App\Models\Calemployee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalemployeeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calemployee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalemployeeResource(Calemployee::all());
    }

    public function store(StoreCalemployeeRequest $request)
    {
        $calemployee = Calemployee::create($request->all());

        return (new CalemployeeResource($calemployee))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Calemployee $calemployee)
    {
        abort_if(Gate::denies('calemployee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CalemployeeResource($calemployee);
    }

    public function update(UpdateCalemployeeRequest $request, Calemployee $calemployee)
    {
        $calemployee->update($request->all());

        return (new CalemployeeResource($calemployee))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Calemployee $calemployee)
    {
        abort_if(Gate::denies('calemployee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calemployee->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
