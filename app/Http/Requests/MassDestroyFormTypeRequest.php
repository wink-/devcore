<?php

namespace App\Http\Requests;

use App\Models\FormType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFormTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('form_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:form_types,id',
        ];
    }
}
