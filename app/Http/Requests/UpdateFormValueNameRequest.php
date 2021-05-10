<?php

namespace App\Http\Requests;

use App\Models\FormValueName;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFormValueNameRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('form_value_name_edit');
    }

    public function rules()
    {
        return [
            'name'       => [
                'string',
                'nullable',
            ],
            'form_name'  => [
                'string',
                'nullable',
            ],
            'name_1'     => [
                'string',
                'nullable',
            ],
            'name_2'     => [
                'string',
                'nullable',
            ],
            'name_3'     => [
                'string',
                'nullable',
            ],
            'name_4'     => [
                'string',
                'nullable',
            ],
            'name_5'     => [
                'string',
                'nullable',
            ],
            'name_6'     => [
                'string',
                'nullable',
            ],
            'name_7'     => [
                'string',
                'nullable',
            ],
            'name_8'     => [
                'string',
                'nullable',
            ],
            'name_9'     => [
                'string',
                'nullable',
            ],
            'name_10'    => [
                'string',
                'nullable',
            ],
            'name_11'    => [
                'string',
                'nullable',
            ],
            'name_12'    => [
                'string',
                'nullable',
            ],
            'name_13'    => [
                'string',
                'nullable',
            ],
            'name_14'    => [
                'string',
                'nullable',
            ],
            'name_15'    => [
                'string',
                'nullable',
            ],
            'name_16'    => [
                'string',
                'nullable',
            ],
            'name_17'    => [
                'string',
                'nullable',
            ],
            'name_18'    => [
                'string',
                'nullable',
            ],
            'name_19'    => [
                'string',
                'nullable',
            ],
            'name_20'    => [
                'string',
                'nullable',
            ],
            'tank'       => [
                'string',
                'nullable',
            ],
            'time_stamp' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'blank'      => [
                'string',
                'nullable',
            ],
        ];
    }
}
