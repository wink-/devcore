<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePEmployeeRequest;
use App\Http\Requests\UpdatePEmployeeRequest;
use App\Http\Resources\Admin\PEmployeeResource;
use App\Models\PEmployee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PEmployeeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('p_employee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PEmployeeResource(PEmployee::all());
    }

    public function store(StorePEmployeeRequest $request)
    {
        $pEmployee = PEmployee::create($request->all());

        return (new PEmployeeResource($pEmployee))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PEmployee $pEmployee)
    {
        abort_if(Gate::denies('p_employee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PEmployeeResource($pEmployee);
    }

    public function update(UpdatePEmployeeRequest $request, PEmployee $pEmployee)
    {
        $pEmployee->update($request->all());

        return (new PEmployeeResource($pEmployee))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(PEmployee $pEmployee)
    {
        abort_if(Gate::denies('p_employee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pEmployee->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
