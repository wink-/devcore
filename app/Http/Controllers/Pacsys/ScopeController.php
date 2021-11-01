<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyScopeRequest;
use App\Http\Requests\Pacsys\StoreScopeRequest;
use App\Http\Requests\Pacsys\UpdateScopeRequest;
use App\Models\Pacsys\Scope;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ScopeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('scope_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $scopes = Scope::all();

        return view('pacsys.scopes.index', compact('scopes'));
    }

    public function create()
    {
        abort_if(Gate::denies('scope_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.scopes.create');
    }

    public function store(StoreScopeRequest $request)
    {
        $scope = Scope::create($request->all());

        return redirect()->route('pacsys.scopes.index');
    }

    public function edit(Scope $scope)
    {
        abort_if(Gate::denies('scope_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.scopes.edit', compact('scope'));
    }

    public function update(UpdateScopeRequest $request, Scope $scope)
    {
        $scope->update($request->all());

        return redirect()->route('pacsys.scopes.index');
    }

    public function show(Scope $scope)
    {
        abort_if(Gate::denies('scope_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.scopes.show', compact('scope'));
    }

    public function destroy(Scope $scope)
    {
        abort_if(Gate::denies('scope_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $scope->delete();

        return back();
    }

    public function massDestroy(MassDestroyScopeRequest $request)
    {
        Scope::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
