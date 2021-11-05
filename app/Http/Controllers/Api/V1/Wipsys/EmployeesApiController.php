<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreEmployeeRequest;
use App\Http\Requests\Wipsys\UpdateEmployeeRequest;
use App\Http\Resources\Wipsys\EmployeeResource;
use App\Models\Wipsys\Employee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('employee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
        abort_if(Gate::denies('employee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmployeeResource($employee);
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());

        return (new EmployeeResource($employee))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
