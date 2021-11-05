<?php

namespace App\Http\Controllers\Api\V1\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\StoreEmployeeRequest;
use App\Http\Requests\Calsys\UpdateEmployeeRequest;
use App\Http\Resources\Calsys\EmployeeResource;
use App\Models\Calsys\Employee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeResource(Employee::all());
    }

    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->all());

        return (new EmployeeResource($employee))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Employee $employee)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeResource($employee);
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());

        return (new EmployeeResource($employee))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Employee $employee)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employee->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
