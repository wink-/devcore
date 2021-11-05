<?php

namespace App\Http\Controllers\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\MassDestroyEmployeeRequest;
use App\Http\Requests\Calsys\StoreEmployeeRequest;
use App\Http\Requests\Calsys\UpdateEmployeeRequest;
use App\Models\Calsys\Calsys\Employee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::all();

        return view('calsys.employees.index', compact('employees'));
    }

    public function create()
    {
        abort_if(Gate::denies('calsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.employees.create');
    }

    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->all());

        return redirect()->route('calsys.employees.index');
    }

    public function edit(Employee $employee)
    {
        abort_if(Gate::denies('calsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.employees.edit', compact('employee'));
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());

        return redirect()->route('calsys.employees.index');
    }

    public function show(Employee $employee)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.employees.show', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employee->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeRequest $request)
    {
        Employee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
