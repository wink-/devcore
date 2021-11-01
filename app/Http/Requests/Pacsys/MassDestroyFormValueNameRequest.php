<?php

namespace App\Http\Requests;

use App\Models\FormValueName;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFormValueNameRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('form_value_name_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:form_value_names,id',
        ];
    }
}
