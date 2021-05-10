<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackingListRequest;
use App\Http\Requests\UpdatePackingListRequest;
use App\Http\Resources\Admin\PackingListResource;
use App\Models\PackingList;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PackingListsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('packing_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PackingListResource(PackingList::all());
    }

    public function store(StorePackingListRequest $request)
    {
        $packingList = PackingList::create($request->all());

        return (new PackingListResource($packingList))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PackingList $packingList)
    {
        abort_if(Gate::denies('packing_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PackingListResource($packingList);
    }

    public function update(UpdatePackingListRequest $request, PackingList $packingList)
    {
        $packingList->update($request->all());

        return (new PackingListResource($packingList))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
