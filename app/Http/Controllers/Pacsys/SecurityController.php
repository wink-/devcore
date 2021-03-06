<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroySecurityRequest;
use App\Http\Requests\Pacsys\StoreSecurityRequest;
use App\Http\Requests\Pacsys\UpdateSecurityRequest;
use App\Models\Pacsys\Pacsys\Security;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('security_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $securities = Security::all();

        return view('pacsys.securities.index', compact('securities'));
    }

    public function create()
    {
        abort_if(Gate::denies('security_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.securities.create');
    }

    public function store(StoreSecurityRequest $request)
    {
        $security = Security::create($request->all());

        return redirect()->route('pacsys.securities.index');
    }

    public function edit(Security $security)
    {
        abort_if(Gate::denies('security_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.securities.edit', compact('security'));
    }

    public function update(UpdateSecurityRequest $request, Security $security)
    {
        $security->update($request->all());

        return redirect()->route('pacsys.securities.index');
    }

    public function show(Security $security)
    {
        abort_if(Gate::denies('security_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.securities.show', compact('security'));
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
