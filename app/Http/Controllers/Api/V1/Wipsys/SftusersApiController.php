<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreSftuserRequest;
use App\Http\Requests\Wipsys\UpdateSftuserRequest;
use App\Http\Resources\Wipsys\SftuserResource;
use App\Models\Wipsys\Sftuser;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SftusersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sftuser_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SftuserResource(Sftuser::all());
    }

    public function store(StoreSftuserRequest $request)
    {
        $sftuser = Sftuser::create($request->all());

        return (new SftuserResource($sftuser))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Sftuser $sftuser)
    {
        abort_if(Gate::denies('sftuser_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SftuserResource($sftuser);
    }

    public function update(UpdateSftuserRequest $request, Sftuser $sftuser)
    {
        $sftuser->update($request->all());

        return (new SftuserResource($sftuser))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Sftuser $sftuser)
    {
        abort_if(Gate::denies('sftuser_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sftuser->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
