<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\AnalysisNew;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAnalysisNewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('analysis_new_create');
    }

    public function rules()
    {
        return [
            'record_name' => [
                'string',
                'nullable',
            ],
            'form_name'   => [
                'string',
                'nullable',
            ],
            'date'        => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'value_1'     => [
                'string',
                'nullable',
            ],
            'value_2'     => [
                'string',
                'nullable',
            ],
            'value_3'     => [
                'string',
                'nullable',
            ],
            'value_4'     => [
                'string',
                'nullable',
            ],
            'value_5'     => [
                'string',
                'nullable',
            ],
            'value_6'     => [
                'string',
                'nullable',
            ],
            'value_7'     => [
                'string',
                'nullable',
            ],
            'value_8'     => [
                'string',
                'nullable',
            ],
            'value_9'     => [
                'string',
                'nullable',
            ],
            'value_10'    => [
                'string',
                'nullable',
            ],
            'value_11'    => [
                'string',
                'nullable',
            ],
            'value_12'    => [
                'string',
                'nullable',
            ],
            'value_13'    => [
                'string',
                'nullable',
            ],
            'value_14'    => [
                'string',
                'nullable',
            ],
            'value_15'    => [
                'string',
                'nullable',
            ],
            'value_16'    => [
                'string',
                'nullable',
            ],
            'value_17'    => [
                'string',
                'nullable',
            ],
            'value_18'    => [
                'string',
                'nullable',
            ],
            'value_19'    => [
                'string',
                'nullable',
            ],
            'value_20'    => [
                'string',
                'nullable',
            ],
            'tank'        => [
                'string',
                'nullable',
            ],
            'emp_code'    => [
                'string',
                'nullable',
            ],
            'time_stamp'  => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'label'       => [
                'string',
                'nullable',
            ],
        ];
    }
}
