<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\MassDestroySessionRequest;
use App\Http\Requests\Wipsys\StoreSessionRequest;
use App\Http\Requests\Wipsys\UpdateSessionRequest;
use App\Models\Wipsys\Session;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SessionsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sessions = Session::all();

        return view('admin.sessions.index', compact('sessions'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sessions.create');
    }

    public function store(StoreSessionRequest $request)
    {
        $session = Session::create($request->all());

        return redirect()->route('admin.sessions.index');
    }

    public function edit(Session $session)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sessions.edit', compact('session'));
    }

    public function update(UpdateSessionRequest $request, Session $session)
    {
        $session->update($request->all());

        return redirect()->route('admin.sessions.index');
    }

    public function show(Session $session)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sessions.show', compact('session'));
    }

    public function destroy(Session $session)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $session->delete();

        return back();
    }

    public function massDestroy(MassDestroySessionRequest $request)
    {
        Session::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
