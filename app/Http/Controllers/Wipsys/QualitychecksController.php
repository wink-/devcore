<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyQualitycheckRequest;
use App\Http\Requests\StoreQualitycheckRequest;
use App\Http\Requests\UpdateQualitycheckRequest;
use App\Models\Wipsys\Qualitycheck;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QualitychecksController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualitychecks = Qualitycheck::all();

        return view('admin.qualitychecks.index', compact('qualitychecks'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.qualitychecks.create');
    }

    public function store(StoreQualitycheckRequest $request)
    {
        $qualitycheck = Qualitycheck::create($request->all());

        return redirect()->route('admin.qualitychecks.index');
    }

    public function edit(Qualitycheck $qualitycheck)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.qualitychecks.edit', compact('qualitycheck'));
    }

    public function update(UpdateQualitycheckRequest $request, Qualitycheck $qualitycheck)
    {
        $qualitycheck->update($request->all());

        return redirect()->route('admin.qualitychecks.index');
    }

    public function show(Qualitycheck $qualitycheck)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.qualitychecks.show', compact('qualitycheck'));
    }

    public function destroy(Qualitycheck $qualitycheck)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualitycheck->delete();

        return back();
    }

    public function massDestroy(MassDestroyQualitycheckRequest $request)
    {
        Qualitycheck::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
