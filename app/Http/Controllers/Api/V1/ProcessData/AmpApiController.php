<?php

namespace App\Http\Controllers\Api\V1\ProcessData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessData\StoreAmpRequest;
use App\Http\Requests\ProcessData\UpdateAmpRequest;
use App\Http\Resources\ProcessData\AmpResource;
use App\Models\ProcessData\Amp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AmpApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('amp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AmpResource(Amp::with(['record'])->get());
    }

    public function store(StoreAmpRequest $request)
    {
        $amp = Amp::create($request->all());

        return (new AmpResource($amp))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Amp $amp)
    {
        abort_if(Gate::denies('amp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AmpResource($amp->load(['record']));
    }

    public function update(UpdateAmpRequest $request, Amp $amp)
    {
        $amp->update($request->all());

        return (new AmpResource($amp))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Amp $amp)
    {
        abort_if(Gate::denies('amp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $amp->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
