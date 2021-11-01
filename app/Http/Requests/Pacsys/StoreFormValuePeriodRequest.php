<?php

namespace App\Http\Requests;

use App\Models\FormValuePeriod;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFormValuePeriodRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('form_value_period_create');
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
            'period_1'   => [
                'string',
                'nullable',
            ],
            'period_2'   => [
                'string',
                'nullable',
            ],
            'period_3'   => [
                'string',
                'nullable',
            ],
            'period_4'   => [
                'string',
                'nullable',
            ],
            'period_5'   => [
                'string',
                'nullable',
            ],
            'period_6'   => [
                'string',
                'nullable',
            ],
            'period_7'   => [
                'string',
                'nullable',
            ],
            'period_8'   => [
                'string',
                'nullable',
            ],
            'period_9'   => [
                'string',
                'nullable',
            ],
            'period_10'  => [
                'string',
                'nullable',
            ],
            'period_11'  => [
                'string',
                'nullable',
            ],
            'period_12'  => [
                'string',
                'nullable',
            ],
            'period_13'  => [
                'string',
                'nullable',
            ],
            'period_14'  => [
                'string',
                'nullable',
            ],
            'period_15'  => [
                'string',
                'nullable',
            ],
            'period_16'  => [
                'string',
                'nullable',
            ],
            'period_17'  => [
                'string',
                'nullable',
            ],
            'period_18'  => [
                'string',
                'nullable',
            ],
            'period_19'  => [
                'string',
                'nullable',
            ],
            'period_20'  => [
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
        ];
    }
}
