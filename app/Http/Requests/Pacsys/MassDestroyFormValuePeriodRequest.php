<?php

namespace App\Http\Requests;

use App\Models\FormValuePeriod;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFormValuePeriodRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('form_value_period_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:form_value_periods,id',
        ];
    }
}
