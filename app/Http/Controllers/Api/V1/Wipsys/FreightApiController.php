<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreFreightRequest;
use App\Http\Requests\Wipsys\UpdateFreightRequest;
use App\Http\Resources\Wipsys\FreightResource;
use App\Models\Wipsys\Freight;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FreightApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('freight_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FreightResource(Freight::all());
    }

    public function store(StoreFreightRequest $request)
    {
        $freight = Freight::create($request->all());

        return (new FreightResource($freight))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Freight $freight)
    {
        abort_if(Gate::denies('freight_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FreightResource($freight);
    }

    public function update(UpdateFreightRequest $request, Freight $freight)
    {
        $freight->update($request->all());

        return (new FreightResource($freight))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Freight $freight)
    {
        abort_if(Gate::denies('freight_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $freight->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
