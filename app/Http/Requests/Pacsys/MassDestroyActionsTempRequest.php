<?php

namespace App\Http\Requests;

use App\Models\ActionsTemp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyActionsTempRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('actions_temp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:actions_temps,id',
        ];
    }
}