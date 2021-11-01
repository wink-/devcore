<?php

namespace App\Http\Controllers\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\MassDestroySourceRequest;
use App\Http\Requests\Calsys\StoreSourceRequest;
use App\Http\Requests\Calsys\UpdateSourceRequest;
use App\Models\Calsys\Source;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SourceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sources = Source::all();

        return view('calsys.sources.index', compact('sources'));
    }

    public function create()
    {
        abort_if(Gate::denies('calsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.sources.create');
    }

    public function store(StoreSourceRequest $request)
    {
        $source = Source::create($request->all());

        return redirect()->route('calsys.sources.index');
    }

    public function edit(Source $source)
    {
        abort_if(Gate::denies('calsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.sources.edit', compact('source'));
    }

    public function update(UpdateSourceRequest $request, Source $source)
    {
        $source->update($request->all());

        return redirect()->route('calsys.sources.index');
    }

    public function show(Source $source)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.sources.show', compact('source'));
    }

    public function destroy(Source $source)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $source->delete();

        return back();
    }

    public function massDestroy(MassDestroySourceRequest $request)
    {
        Source::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
