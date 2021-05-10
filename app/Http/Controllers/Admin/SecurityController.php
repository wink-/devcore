<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySecurityRequest;
use App\Http\Requests\StoreSecurityRequest;
use App\Http\Requests\UpdateSecurityRequest;
use App\Models\Security;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('security_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $securities = Security::all();

        return view('admin.securities.index', compact('securities'));
    }

    public function create()
    {
        abort_if(Gate::denies('security_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.securities.create');
    }

    public function store(StoreSecurityRequest $request)
    {
        $security = Security::create($request->all());

        return redirect()->route('admin.securities.index');
    }

    public function edit(Security $security)
    {
        abort_if(Gate::denies('security_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.securities.edit', compact('security'));
    }

    public function update(UpdateSecurityRequest $request, Security $security)
    {
        $security->update($request->all());

        return redirect()->route('admin.securities.index');
    }

    public function show(Security $security)
    {
        abort_if(Gate::denies('security_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.securities.show', compact('security'));
    }

    public function destroy(Security $security)
    {
        abort_if(Gate::denies('security_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $security->delete();

        return back();
    }

    public function massDestroy(MassDestroySecurityRequest $request)
    {
        Security::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
