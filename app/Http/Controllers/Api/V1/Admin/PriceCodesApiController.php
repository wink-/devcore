<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePriceCodeRequest;
use App\Http\Requests\UpdatePriceCodeRequest;
use App\Http\Resources\Admin\PriceCodeResource;
use App\Models\PriceCode;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PriceCodesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('price_code_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PriceCodeResource(PriceCode::all());
    }

    public function store(StorePriceCodeRequest $request)
    {
        $priceCode = PriceCode::create($request->all());

        return (new PriceCodeResource($priceCode))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PriceCode $priceCode)
    {
        abort_if(Gate::denies('price_code_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PriceCodeResource($priceCode);
    }

    public function update(UpdatePriceCodeRequest $request, PriceCode $priceCode)
    {
        $priceCode->update($request->all());

        return (new PriceCodeResource($priceCode))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(PriceCode $priceCode)
    {
        abort_if(Gate::denies('price_code_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $priceCode->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
