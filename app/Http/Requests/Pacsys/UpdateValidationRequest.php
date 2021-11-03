<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\Validation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateValidationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('validation_edit');
    }

    public function rules()
    {
        return [
            'validation_text' => [
                'string',
                'nullable',
            ],
        ];
    }
}
