<?php

namespace App\Http\Requests;

use App\Models\FormValueUnit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFormValueUnitRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('form_value_unit_create');
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
            'unit_1'    => [
                'string',
                'nullable',
            ],
            'unit_2'    => [
                'string',
                'nullable',
            ],
            'unit_3'    => [
                'string',
                'nullable',
            ],
            'unit_4'    => [
                'string',
                'nullable',
            ],
            'unit_5'    => [
                'string',
                'nullable',
            ],
            'unit_6'    => [
                'string',
                'nullable',
            ],
            'unit_7'    => [
                'string',
                'nullable',
            ],
            'unit_8'    => [
                'string',
                'nullable',
            ],
            'unit_9'    => [
                'string',
                'nullable',
            ],
            'unit_10'   => [
                'string',
                'nullable',
            ],
            'unit_11'   => [
                'string',
                'nullable',
            ],
            'unit_12'   => [
                'string',
                'nullable',
            ],
            'unit_13'   => [
                'string',
                'nullable',
            ],
            'unit_14'   => [
                'string',
                'nullable',
            ],
            'unit_15'   => [
                'string',
                'nullable',
            ],
            'unit_16'   => [
                'string',
                'nullable',
            ],
            'unit_17'   => [
                'string',
                'nullable',
            ],
            'unit_18'   => [
                'string',
                'nullable',
            ],
            'unit_19'   => [
                'string',
                'nullable',
            ],
            'unit_20'   => [
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
