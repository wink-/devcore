<?php

namespace App\Http\Requests;

use App\Models\FormType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFormTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('form_type_create');
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
