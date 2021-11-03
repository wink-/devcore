<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\FormValueRange;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFormValueRangeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('form_value_range_edit');
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
            'min_1'      => [
                'string',
                'nullable',
            ],
            'max_1'      => [
                'string',
                'nullable',
            ],
            'min_2'      => [
                'string',
                'nullable',
            ],
            'max_2'      => [
                'string',
                'nullable',
            ],
            'min_3'      => [
                'string',
                'nullable',
            ],
            'max_3'      => [
                'string',
                'nullable',
            ],
            'min_4'      => [
                'string',
                'nullable',
            ],
            'max_4'      => [
                'string',
                'nullable',
            ],
            'min_5'      => [
                'string',
                'nullable',
            ],
            'max_5'      => [
                'string',
                'nullable',
            ],
            'min_6'      => [
                'string',
                'nullable',
            ],
            'max_6'      => [
                'string',
                'nullable',
            ],
            'min_7'      => [
                'string',
                'nullable',
            ],
            'max_7'      => [
                'string',
                'nullable',
            ],
            'min_8'      => [
                'string',
                'nullable',
            ],
            'max_8'      => [
                'string',
                'nullable',
            ],
            'min_9'      => [
                'string',
                'nullable',
            ],
            'max_9'      => [
                'string',
                'nullable',
            ],
            'min_10'     => [
                'string',
                'nullable',
            ],
            'max_10'     => [
                'string',
                'nullable',
            ],
            'min_11'     => [
                'string',
                'nullable',
            ],
            'max_11'     => [
                'string',
                'nullable',
            ],
            'min_12'     => [
                'string',
                'nullable',
            ],
            'max_12'     => [
                'string',
                'nullable',
            ],
            'min_13'     => [
                'string',
                'nullable',
            ],
            'max_13'     => [
                'string',
                'nullable',
            ],
            'min_14'     => [
                'string',
                'nullable',
            ],
            'max_14'     => [
                'string',
                'nullable',
            ],
            'min_15'     => [
                'string',
                'nullable',
            ],
            'max_15'     => [
                'string',
                'nullable',
            ],
            'min_16'     => [
                'string',
                'nullable',
            ],
            'max_16'     => [
                'string',
                'nullable',
            ],
            'min_17'     => [
                'string',
                'nullable',
            ],
            'max_17'     => [
                'string',
                'nullable',
            ],
            'min_18'     => [
                'string',
                'nullable',
            ],
            'max_18'     => [
                'string',
                'nullable',
            ],
            'min_19'     => [
                'string',
                'nullable',
            ],
            'max_19'     => [
                'string',
                'nullable',
            ],
            'min_20'     => [
                'string',
                'nullable',
            ],
            'max_20'     => [
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
