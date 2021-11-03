<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Workgroup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWorkgroupRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('workgroup_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:workgroups,id',
        ];
    }
}
