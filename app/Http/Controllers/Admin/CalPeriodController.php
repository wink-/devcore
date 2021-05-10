<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCalPeriodRequest;
use App\Http\Requests\StoreCalPeriodRequest;
use App\Http\Requests\UpdateCalPeriodRequest;
use App\Models\CalPeriod;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalPeriodController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_period_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calPeriods = CalPeriod::all();

        return view('admin.calPeriods.index', compact('calPeriods'));
    }

    public function create()
    {
        abort_if(Gate::denies('cal_period_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calPeriods.create');
    }

    public function store(StoreCalPeriodRequest $request)
    {
        $calPeriod = CalPeriod::create($request->all());

        return redirect()->route('admin.cal-periods.index');
    }

    public function edit(CalPeriod $calPeriod)
    {
        abort_if(Gate::denies('cal_period_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calPeriods.edit', compact('calPeriod'));
    }

    public function update(UpdateCalPeriodRequest $request, CalPeriod $calPeriod)
    {
        $calPeriod->update($request->all());

        return redirect()->route('admin.cal-periods.index');
    }

    public function show(CalPeriod $calPeriod)
    {
        abort_if(Gate::denies('cal_period_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calPeriods.show', compact('calPeriod'));
    }

    public function destroy(CalPeriod $calPeriod)
    {
        abort_if(Gate::denies('cal_period_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calPeriod->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalPeriodRequest $request)
    {
        CalPeriod::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
