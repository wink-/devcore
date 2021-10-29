<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCalTypeRequest;
use App\Http\Requests\StoreCalTypeRequest;
use App\Http\Requests\UpdateCalTypeRequest;
use App\Models\CalType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cal_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calTypes = CalType::all();

        return view('admin.calTypes.index', compact('calTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('cal_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calTypes.create');
    }

    public function store(StoreCalTypeRequest $request)
    {
        $calType = CalType::create($request->all());

        return redirect()->route('admin.cal-types.index');
    }

    public function edit(CalType $calType)
    {
        abort_if(Gate::denies('cal_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calTypes.edit', compact('calType'));
    }

    public function update(UpdateCalTypeRequest $request, CalType $calType)
    {
        $calType->update($request->all());

        return redirect()->route('admin.cal-types.index');
    }

    public function show(CalType $calType)
    {
        abort_if(Gate::denies('cal_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calTypes.show', compact('calType'));
    }

    public function destroy(CalType $calType)
    {
        abort_if(Gate::denies('cal_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calType->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalTypeRequest $request)
    {
        CalType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
