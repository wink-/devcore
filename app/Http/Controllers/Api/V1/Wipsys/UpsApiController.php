<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Resources\Wipsys\UpResource;
use App\Models\Wipsys\Up;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UpsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('up_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UpResource(Up::all());
    }

    public function show(Up $up)
    {
        abort_if(Gate::denies('up_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UpResource($up);
    }
}
