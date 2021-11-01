<?php

namespace App\Http\Controllers\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\MassDestroyStatusRequest;
use App\Http\Requests\Calsys\StoreStatusRequest;
use App\Http\Requests\Calsys\UpdateStatusRequest;
use App\Models\Calsys\Status;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalStatusController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = Status::all();

        return view('calsys.statuses.index', compact('statuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('calsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.statuses.create');
    }

    public function store(StoreStatusRequest $request)
    {
        $status = Status::create($request->all());

        return redirect()->route('calsys.statuses.index');
    }

    public function edit(Status $status)
    {
        abort_if(Gate::denies('calsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.statuses.edit', compact('calStatus'));
    }

    public function update(UpdateStatusRequest $request, Status $status)
    {
        $status->update($request->all());

        return redirect()->route('calsys.cal-statuses.index');
    }

    public function show(Status $status)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.statuses.show', compact('status'));
    }

    public function destroy(Status $status)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $status->delete();

        return back();
    }

    public function massDestroy(MassDestroyStatusRequest $request)
    {
        Status::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
