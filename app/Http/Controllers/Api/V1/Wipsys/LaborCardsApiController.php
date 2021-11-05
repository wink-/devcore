<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\UpdateLaborCardRequest;
use App\Http\Resources\Wipsys\LaborCardResource;
use App\Models\Wipsys\LaborCard;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LaborCardsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('labor_card_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LaborCardResource(LaborCard::all());
    }

    public function show(LaborCard $laborCard)
    {
        abort_if(Gate::denies('labor_card_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LaborCardResource($laborCard);
    }

    public function update(UpdateLaborCardRequest $request, LaborCard $laborCard)
    {
        $laborCard->update($request->all());

        return (new LaborCardResource($laborCard))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
