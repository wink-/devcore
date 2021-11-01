<?php

namespace App\Http\Controllers\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\MassDestroyOwnerRequest;
use App\Http\Requests\Calsys\StoreOwnerRequest;
use App\Http\Requests\Calsys\UpdateOwnerRequest;
use App\Models\Calsys\Owner;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnerController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $owners = Owner::all();

        return view('calsys.owners.index', compact('owners'));
    }

    public function create()
    {
        abort_if(Gate::denies('calsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.owners.create');
    }

    public function store(StoreOwnerRequest $request)
    {
        $owner = Owner::create($request->all());

        return redirect()->route('calsys.owners.index');
    }

    public function edit(Owner $owner)
    {
        abort_if(Gate::denies('calsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.owners.edit', compact('owner'));
    }

    public function update(UpdateOwnerRequest $request, owner $owner)
    {
        $owner->update($request->all());

        return redirect()->route('calsys.owners.index');
    }

    public function show(Owner $owner)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.owners.show', compact('owner'));
    }

    public function destroy(Owner $owner)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $owner->delete();

        return back();
    }

    public function massDestroy(MassDestroyOwnerRequest $request)
    {
        Owner::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
