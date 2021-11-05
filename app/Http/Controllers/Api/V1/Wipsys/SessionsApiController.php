<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreSessionRequest;
use App\Http\Requests\Wipsys\UpdateSessionRequest;
use App\Http\Resources\Wipsys\SessionResource;
use App\Models\Wipsys\Session;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SessionsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('session_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SessionResource(Session::all());
    }

    public function store(StoreSessionRequest $request)
    {
        $session = Session::create($request->all());

        return (new SessionResource($session))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Session $session)
    {
        abort_if(Gate::denies('session_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SessionResource($session);
    }

    public function update(UpdateSessionRequest $request, Session $session)
    {
        $session->update($request->all());

        return (new SessionResource($session))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Session $session)
    {
        abort_if(Gate::denies('session_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $session->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
