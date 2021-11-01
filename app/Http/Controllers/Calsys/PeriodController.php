<?php

namespace App\Http\Controllers\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\MassDestroyPeriodRequest;
use App\Http\Requests\Calsys\StorePeriodRequest;
use App\Http\Requests\Calsys\UpdatePeriodRequest;
use App\Models\Calsys\Period;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PeriodController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $periods = Period::all();

        return view('calsys.periods.index', compact('periods'));
    }

    public function create()
    {
        abort_if(Gate::denies('calsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.periods.create');
    }

    public function store(StorePeriodRequest $request)
    {
        $period = Period::create($request->all());

        return redirect()->route('calsys.periods.index');
    }

    public function edit(Period $period)
    {
        abort_if(Gate::denies('calsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.periods.edit', compact('period'));
    }

    public function update(UpdatePeriodRequest $request, Period $period)
    {
        $period->update($request->all());

        return redirect()->route('calsys.periods.index');
    }

    public function show(Period $period)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.periods.show', compact('period'));
    }

    public function destroy(Period $period)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $period->delete();

        return back();
    }

    public function massDestroy(MassDestroyPeriodRequest $request)
    {
        Period::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
