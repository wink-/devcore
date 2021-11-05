<?php

namespace App\Http\Requests\ProcessData;

use App\Models\ProcessData\Volt;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVoltRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('processdata_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
