<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCalemployeeRequest;
use App\Http\Requests\StoreCalemployeeRequest;
use App\Http\Requests\UpdateCalemployeeRequest;
use App\Models\Calemployee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalemployeeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calemployee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calemployees = Calemployee::all();

        return view('admin.calemployees.index', compact('calemployees'));
    }

    public function create()
    {
        abort_if(Gate::denies('calemployee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calemployees.create');
    }

    public function store(StoreCalemployeeRequest $request)
    {
        $calemployee = Calemployee::create($request->all());

        return redirect()->route('admin.calemployees.index');
    }

    public function edit(Calemployee $calemployee)
    {
        abort_if(Gate::denies('calemployee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calemployees.edit', compact('calemployee'));
    }

    public function update(UpdateCalemployeeRequest $request, Calemployee $calemployee)
    {
        $calemployee->update($request->all());

        return redirect()->route('admin.calemployees.index');
    }

    public function show(Calemployee $calemployee)
    {
        abort_if(Gate::denies('calemployee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calemployees.show', compact('calemployee'));
    }

    public function destroy(Calemployee $calemployee)
    {
        abort_if(Gate::denies('calemployee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calemployee->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalemployeeRequest $request)
    {
        Calemployee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
