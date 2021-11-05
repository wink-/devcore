<?php

namespace App\Http\Controllers\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\MassDestroyCalibratedByRequest;
use App\Http\Requests\Calsys\StoreCalibratedByRequest;
use App\Http\Requests\Calsys\UpdateCalibratedByRequest;
use App\Models\Calsys\Calsys\CalibratedBy;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalibratedByController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calibratedBies = CalibratedBy::all();

        return view('calsys.calibratedBies.index', compact('calibratedBies'));
    }

    public function create()
    {
        abort_if(Gate::denies('calsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.calibratedBies.create');
    }

    public function store(StoreCalibratedByRequest $request)
    {
        $calibratedBy = CalibratedBy::create($request->all());

        return redirect()->route('calsys.calibrated-bies.index');
    }

    public function edit(CalibratedBy $calibratedBy)
    {
        abort_if(Gate::denies('calsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.calibratedBies.edit', compact('calibratedBy'));
    }

    public function update(UpdateCalibratedByRequest $request, CalibratedBy $calibratedBy)
    {
        $calibratedBy->update($request->all());

        return redirect()->route('calsys.calibrated-bies.index');
    }

    public function show(CalibratedBy $calibratedBy)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.calibratedBies.show', compact('calibratedBy'));
    }

    public function destroy(CalibratedBy $calibratedBy)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calibratedBy->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalibratedByRequest $request)
    {
        CalibratedBy::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
