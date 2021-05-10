<?php

namespace App\Http\Requests;

use App\Models\CalcValue;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCalcValueRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('calc_value_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:calc_values,id',
        ];
    }
}
