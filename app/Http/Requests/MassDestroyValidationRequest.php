<?php

namespace App\Http\Requests;

use App\Models\Validation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyValidationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('validation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:validations,id',
        ];
    }
}
