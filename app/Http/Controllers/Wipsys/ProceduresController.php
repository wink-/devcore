<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProcedureRequest;
use App\Http\Requests\StoreProcedureRequest;
use App\Http\Requests\UpdateProcedureRequest;
use App\Models\Wipsys\Procedure;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProceduresController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $procedures = Procedure::all();

        return view('admin.procedures.index', compact('procedures'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.procedures.create');
    }

    public function store(StoreProcedureRequest $request)
    {
        $procedure = Procedure::create($request->all());

        return redirect()->route('admin.procedures.index');
    }

    public function edit(Procedure $procedure)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.procedures.edit', compact('procedure'));
    }

    public function update(UpdateProcedureRequest $request, Procedure $procedure)
    {
        $procedure->update($request->all());

        return redirect()->route('admin.procedures.index');
    }

    public function show(Procedure $procedure)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.procedures.show', compact('procedure'));
    }

    public function destroy(Procedure $procedure)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $procedure->delete();

        return back();
    }

    public function massDestroy(MassDestroyProcedureRequest $request)
    {
        Procedure::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
