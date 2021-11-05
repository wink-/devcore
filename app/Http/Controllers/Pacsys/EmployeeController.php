<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyPEmployeeRequest;
use App\Http\Requests\Pacsys\StorePEmployeeRequest;
use App\Http\Requests\Pacsys\UpdatePEmployeeRequest;
use App\Models\Pacsys\Pacsys\Employee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = PEmployee::query()->select(sprintf('%s.*', (new PEmployee)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_show';
                $editGate      = 'employee_edit';
                $deleteGate    = 'employee_delete';
                $crudRoutePart = 'p-employees';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('user_name', function ($row) {
                return $row->user_name ? $row->user_name : "";
            });
            $table->editColumn('code', function ($row) {
                return $row->code ? $row->code : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('pacsys.employees.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.employees.create');
    }

    public function store(StorePEmployeeRequest $request)
    {
        $employee = PEmployee::create($request->all());

        return redirect()->route('pacsys.employees.index');
    }

    public function edit(PEmployee $employee)
    {
        abort_if(Gate::denies('employee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.employees.edit', compact('employee'));
    }

    public function update(UpdatePEmployeeRequest $request, PEmployee $employee)
    {
        $employee->update($request->all());

        return redirect()->route('pacsys.p-employees.index');
    }

    public function show(PEmployee $employee)
    {
        abort_if(Gate::denies('employee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.employees.show', compact('employee'));
    }

    public function destroy(PEmployee $employee)
    {
        abort_if(Gate::denies('employee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employee->delete();

        return back();
    }

    public function massDestroy(MassDestroyPEmployeeRequest $request)
    {
        PEmployee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
