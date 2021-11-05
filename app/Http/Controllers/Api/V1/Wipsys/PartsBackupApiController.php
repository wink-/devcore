<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\UpdatePartsBackupRequest;
use App\Http\Resources\Wipsys\PartsBackupResource;
use App\Models\Wipsys\PartsBackup;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PartsBackupApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('parts_backup_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartsBackupResource(PartsBackup::all());
    }

    public function show(PartsBackup $partsBackup)
    {
        abort_if(Gate::denies('parts_backup_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartsBackupResource($partsBackup);
    }

    public function update(UpdatePartsBackupRequest $request, PartsBackup $partsBackup)
    {
        $partsBackup->update($request->all());

        return (new PartsBackupResource($partsBackup))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
