<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyPeriodRequest;
use App\Http\Requests\Pacsys\StorePeriodRequest;
use App\Http\Requests\Pacsys\UpdatePeriodRequest;
use App\Models\Pacsys\Pacsys\Period;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PeriodController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('period_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $periods = Period::all();

        return view('pacsys.periods.index', compact('periods'));
    }

    public function create()
    {
        abort_if(Gate::denies('period_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.periods.create');
    }

    public function store(StorePeriodRequest $request)
    {
        $period = Period::create($request->all());

        return redirect()->route('pacsys.periods.index');
    }

    public function edit(Period $period)
    {
        abort_if(Gate::denies('period_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.periods.edit', compact('period'));
    }

    public function update(UpdatePeriodRequest $request, Period $period)
    {
        $period->update($request->all());

        return redirect()->route('pacsys.periods.index');
    }

    public function show(Period $period)
    {
        abort_if(Gate::denies('period_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.periods.show', compact('period'));
    }

    public function destroy(Period $period)
    {
        abort_if(Gate::denies('period_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $period->delete();

        return back();
    }

    public function massDestroy(MassDestroyPeriodRequest $request)
    {
        Period::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
