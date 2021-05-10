<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCalibratedByRequest;
use App\Http\Requests\StoreCalibratedByRequest;
use App\Http\Requests\UpdateCalibratedByRequest;
use App\Models\CalibratedBy;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalibratedByController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calibrated_by_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calibratedBies = CalibratedBy::all();

        return view('admin.calibratedBies.index', compact('calibratedBies'));
    }

    public function create()
    {
        abort_if(Gate::denies('calibrated_by_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calibratedBies.create');
    }

    public function store(StoreCalibratedByRequest $request)
    {
        $calibratedBy = CalibratedBy::create($request->all());

        return redirect()->route('admin.calibrated-bies.index');
    }

    public function edit(CalibratedBy $calibratedBy)
    {
        abort_if(Gate::denies('calibrated_by_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calibratedBies.edit', compact('calibratedBy'));
    }

    public function update(UpdateCalibratedByRequest $request, CalibratedBy $calibratedBy)
    {
        $calibratedBy->update($request->all());

        return redirect()->route('admin.calibrated-bies.index');
    }

    public function show(CalibratedBy $calibratedBy)
    {
        abort_if(Gate::denies('calibrated_by_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calibratedBies.show', compact('calibratedBy'));
    }

    public function destroy(CalibratedBy $calibratedBy)
    {
        abort_if(Gate::denies('calibrated_by_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calibratedBy->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalibratedByRequest $request)
    {
        CalibratedBy::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
