<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreMethodRequest;
use App\Http\Requests\Wipsys\UpdateMethodRequest;
use App\Http\Resources\Wipsys\MethodResource;
use App\Models\Wipsys\Method;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MethodsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('method_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MethodResource(Method::all());
    }

    public function store(StoreMethodRequest $request)
    {
        $method = Method::create($request->all());

        return (new MethodResource($method))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Method $method)
    {
        abort_if(Gate::denies('method_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MethodResource($method);
    }

    public function update(UpdateMethodRequest $request, Method $method)
    {
        $method->update($request->all());

        return (new MethodResource($method))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Method $method)
    {
        abort_if(Gate::denies('method_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $method->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
