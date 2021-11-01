<?php

namespace App\Http\Requests;

use App\Models\FormValueRange;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFormValueRangeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('form_value_range_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:form_value_ranges,id',
        ];
    }
}