<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\PartsBackup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPartsBackupRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('parts_backup_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:parts_backups,id',
        ];
    }
}
