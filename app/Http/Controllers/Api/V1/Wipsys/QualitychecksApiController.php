<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreQualitycheckRequest;
use App\Http\Requests\Wipsys\UpdateQualitycheckRequest;
use App\Http\Resources\Wipsys\QualitycheckResource;
use App\Models\Wipsys\Qualitycheck;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QualitychecksApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('qualitycheck_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new QualitycheckResource(Qualitycheck::all());
    }

    public function store(StoreQualitycheckRequest $request)
    {
        $qualitycheck = Qualitycheck::create($request->all());

        return (new QualitycheckResource($qualitycheck))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Qualitycheck $qualitycheck)
    {
        abort_if(Gate::denies('qualitycheck_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new QualitycheckResource($qualitycheck);
    }

    public function update(UpdateQualitycheckRequest $request, Qualitycheck $qualitycheck)
    {
        $qualitycheck->update($request->all());

        return (new QualitycheckResource($qualitycheck))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Qualitycheck $qualitycheck)
    {
        abort_if(Gate::denies('qualitycheck_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualitycheck->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
