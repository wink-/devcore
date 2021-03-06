<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\UpdatePackingListsDetailRequest;
use App\Http\Resources\Wipsys\PackingListsDetailResource;
use App\Models\Wipsys\PackingListsDetail;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PackingListsDetailApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('packing_lists_detail_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PackingListsDetailResource(PackingListsDetail::all());
    }

    public function show(PackingListsDetail $packingListsDetail)
    {
        abort_if(Gate::denies('packing_lists_detail_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PackingListsDetailResource($packingListsDetail);
    }

    public function update(UpdatePackingListsDetailRequest $request, PackingListsDetail $packingListsDetail)
    {
        $packingListsDetail->update($request->all());

        return (new PackingListsDetailResource($packingListsDetail))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
