<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCalSourceRequest;
use App\Http\Requests\StoreCalSourceRequest;
use App\Http\Requests\UpdateCalSourceRequest;
use App\Models\CalSource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalSourceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_source_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calSources = CalSource::all();

        return view('admin.calSources.index', compact('calSources'));
    }

    public function create()
    {
        abort_if(Gate::denies('cal_source_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calSources.create');
    }

    public function store(StoreCalSourceRequest $request)
    {
        $calSource = CalSource::create($request->all());

        return redirect()->route('admin.cal-sources.index');
    }

    public function edit(CalSource $calSource)
    {
        abort_if(Gate::denies('cal_source_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calSources.edit', compact('calSource'));
    }

    public function update(UpdateCalSourceRequest $request, CalSource $calSource)
    {
        $calSource->update($request->all());

        return redirect()->route('admin.cal-sources.index');
    }

    public function show(CalSource $calSource)
    {
        abort_if(Gate::denies('cal_source_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calSources.show', compact('calSource'));
    }

    public function destroy(CalSource $calSource)
    {
        abort_if(Gate::denies('cal_source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calSource->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalSourceRequest $request)
    {
        CalSource::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
