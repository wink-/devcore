<?php

namespace App\Http\Requests;

use App\Models\Volt;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVoltRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('volt_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:volts,id',
        ];
    }
}