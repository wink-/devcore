<?php

namespace App\Http\Controllers\Api\V1\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\StoreTypeRequest;
use App\Http\Requests\Calsys\UpdateTypeRequest;
use App\Http\Resources\Calsys\TypeResource;
use App\Models\Calsys\Type;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TypeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TypeResource(Type::all());
    }

    public function store(StoreTypeRequest $request)
    {
        $type = Type::create($request->all());

        return (new TypeResource($type))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Type $type)
    {
        abort_if(Gate::denies('type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TypeResource($type);
    }

    public function update(UpdateTypeRequest $request, Type $type)
    {
        $type->update($request->all());

        return (new TypeResource($type))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Type $type)
    {
        abort_if(Gate::denies('type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $type->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
