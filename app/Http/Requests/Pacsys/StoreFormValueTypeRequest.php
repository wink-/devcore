<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\FormValueType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFormValueTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('form_value_type_create');
    }

    public function rules()
    {
        return [
            'name'      => [
                'string',
                'nullable',
            ],
            'form_name' => [
                'string',
                'nullable',
            ],
            'type_1'    => [
                'string',
                'nullable',
            ],
            'type_2'    => [
                'string',
                'nullable',
            ],
            'type_3'    => [
                'string',
                'nullable',
            ],
            'type_4'    => [
                'string',
                'nullable',
            ],
            'type_5'    => [
                'string',
                'nullable',
            ],
            'type_6'    => [
                'string',
                'nullable',
            ],
            'type_7'    => [
                'string',
                'nullable',
            ],
            'type_8'    => [
                'string',
                'nullable',
            ],
            'type_9'    => [
                'string',
                'nullable',
            ],
            'type_10'   => [
                'string',
                'nullable',
            ],
            'type_11'   => [
                'string',
                'nullable',
            ],
            'type_12'   => [
                'string',
                'nullable',
            ],
            'type_13'   => [
                'string',
                'nullable',
            ],
            'type_14'   => [
                'string',
                'nullable',
            ],
            'type_15'   => [
                'string',
                'nullable',
            ],
            'type_16'   => [
                'string',
                'nullable',
            ],
            'type_17'   => [
                'string',
                'nullable',
            ],
            'type_18'   => [
                'string',
                'nullable',
            ],
            'type_19'   => [
                'string',
                'nullable',
            ],
            'type_20'   => [
                'string',
                'nullable',
            ],
            'tank'      => [
                'string',
                'nullable',
            ],
            'timestamp' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
