<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCalStatusRequest;
use App\Http\Requests\StoreCalStatusRequest;
use App\Http\Requests\UpdateCalStatusRequest;
use App\Models\CalStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalStatusController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calStatuses = CalStatus::all();

        return view('admin.calStatuses.index', compact('calStatuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('cal_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calStatuses.create');
    }

    public function store(StoreCalStatusRequest $request)
    {
        $calStatus = CalStatus::create($request->all());

        return redirect()->route('admin.cal-statuses.index');
    }

    public function edit(CalStatus $calStatus)
    {
        abort_if(Gate::denies('cal_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calStatuses.edit', compact('calStatus'));
    }

    public function update(UpdateCalStatusRequest $request, CalStatus $calStatus)
    {
        $calStatus->update($request->all());

        return redirect()->route('admin.cal-statuses.index');
    }

    public function show(CalStatus $calStatus)
    {
        abort_if(Gate::denies('cal_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calStatuses.show', compact('calStatus'));
    }

    public function destroy(CalStatus $calStatus)
    {
        abort_if(Gate::denies('cal_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalStatusRequest $request)
    {
        CalStatus::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
