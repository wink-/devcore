<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePartshistoryRequest;
use App\Http\Resources\Admin\PartshistoryResource;
use App\Models\Partshistory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PartshistoryApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('partshistory_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartshistoryResource(Partshistory::all());
    }

    public function show(Partshistory $partshistory)
    {
        abort_if(Gate::denies('partshistory_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartshistoryResource($partshistory);
    }

    public function update(UpdatePartshistoryRequest $request, Partshistory $partshistory)
    {
        $partshistory->update($request->all());

        return (new PartshistoryResource($partshistory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
