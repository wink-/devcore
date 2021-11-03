<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\FormType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFormTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('form_type_edit');
    }

    public function rules()
    {
        return [
            'form_type'   => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'time_stamp'  => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
