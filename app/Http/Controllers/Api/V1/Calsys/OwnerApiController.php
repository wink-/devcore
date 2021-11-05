<?php

namespace App\Http\Controllers\Api\V1\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\StoreOwnerRequest;
use App\Http\Requests\Calsys\UpdateOwnerRequest;
use App\Http\Resources\Calsys\OwnerResource;
use App\Models\Calsys\Owner;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnerApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OwnerResource(Owner::all());
    }

    public function store(StoreOwnerRequest $request)
    {
        $owner = Owner::create($request->all());

        return (new OwnerResource($owner))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Owner $owner)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OwnerResource($owner);
    }

    public function update(UpdateOwnerRequest $request, Owner $owner)
    {
        $owner->update($request->all());

        return (new OwnerResource($owner))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Owner $owner)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $owner->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
