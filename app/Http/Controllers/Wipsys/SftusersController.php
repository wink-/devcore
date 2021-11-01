<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\MassDestroySftuserRequest;
use App\Http\Requests\Wipsys\StoreSftuserRequest;
use App\Http\Requests\Wipsys\UpdateSftuserRequest;
use App\Models\Wipsys\Sftuser;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SftusersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sftusers = Sftuser::all();

        return view('admin.sftusers.index', compact('sftusers'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sftusers.create');
    }

    public function store(StoreSftuserRequest $request)
    {
        $sftuser = Sftuser::create($request->all());

        return redirect()->route('admin.sftusers.index');
    }

    public function edit(Sftuser $sftuser)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sftusers.edit', compact('sftuser'));
    }

    public function update(UpdateSftuserRequest $request, Sftuser $sftuser)
    {
        $sftuser->update($request->all());

        return redirect()->route('admin.sftusers.index');
    }

    public function show(Sftuser $sftuser)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sftusers.show', compact('sftuser'));
    }

    public function destroy(Sftuser $sftuser)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sftuser->delete();

        return back();
    }

    public function massDestroy(MassDestroySftuserRequest $request)
    {
        Sftuser::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
