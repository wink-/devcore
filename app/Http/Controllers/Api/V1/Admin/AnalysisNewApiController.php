<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnalysisNewRequest;
use App\Http\Requests\UpdateAnalysisNewRequest;
use App\Http\Resources\Admin\AnalysisNewResource;
use App\Models\AnalysisNew;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AnalysisNewApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('analysis_new_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AnalysisNewResource(AnalysisNew::all());
    }

    public function store(StoreAnalysisNewRequest $request)
    {
        $analysisNew = AnalysisNew::create($request->all());

        return (new AnalysisNewResource($analysisNew))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AnalysisNew $analysisNew)
    {
        abort_if(Gate::denies('analysis_new_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AnalysisNewResource($analysisNew);
    }

    public function update(UpdateAnalysisNewRequest $request, AnalysisNew $analysisNew)
    {
        $analysisNew->update($request->all());

        return (new AnalysisNewResource($analysisNew))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AnalysisNew $analysisNew)
    {
        abort_if(Gate::denies('analysis_new_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $analysisNew->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
