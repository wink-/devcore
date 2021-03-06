<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StorePartRequest;
use App\Http\Requests\Wipsys\UpdatePartRequest;
use App\Http\Resources\Wipsys\PartResource;
use App\Models\Wipsys\Part;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PartsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('part_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartResource(Part::all());
    }

    public function store(StorePartRequest $request)
    {
        $part = Part::create($request->all());

        return (new PartResource($part))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Part $part)
    {
        abort_if(Gate::denies('part_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartResource($part);
    }

    public function update(UpdatePartRequest $request, Part $part)
    {
        $part->update($request->all());

        return (new PartResource($part))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
