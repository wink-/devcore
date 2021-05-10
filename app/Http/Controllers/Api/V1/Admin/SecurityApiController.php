<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSecurityRequest;
use App\Http\Requests\UpdateSecurityRequest;
use App\Http\Resources\Admin\SecurityResource;
use App\Models\Security;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('security_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SecurityResource(Security::all());
    }

    public function store(StoreSecurityRequest $request)
    {
        $security = Security::create($request->all());

        return (new SecurityResource($security))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Security $security)
    {
        abort_if(Gate::denies('security_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SecurityResource($security);
    }

    public function update(UpdateSecurityRequest $request, Security $security)
    {
        $security->update($request->all());

        return (new SecurityResource($security))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Security $security)
    {
        abort_if(Gate::denies('security_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $security->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
