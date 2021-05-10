<?php

namespace App\Http\Requests;

use App\Models\FormValueVisible;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFormValueVisibleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('form_value_visible_edit');
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
            'visible_1'  => [
                'string',
                'nullable',
            ],
            'visible_2'  => [
                'string',
                'nullable',
            ],
            'visible_3'  => [
                'string',
                'nullable',
            ],
            'visible_4'  => [
                'string',
                'nullable',
            ],
            'visible_5'  => [
                'string',
                'nullable',
            ],
            'visible_6'  => [
                'string',
                'nullable',
            ],
            'visible_7'  => [
                'string',
                'nullable',
            ],
            'visible_8'  => [
                'string',
                'nullable',
            ],
            'visible_9'  => [
                'string',
                'nullable',
            ],
            'visible_10' => [
                'string',
                'nullable',
            ],
            'visible_11' => [
                'string',
                'nullable',
            ],
            'visible_12' => [
                'string',
                'nullable',
            ],
            'visible_13' => [
                'string',
                'nullable',
            ],
            'visible_14' => [
                'string',
                'nullable',
            ],
            'visible_15' => [
                'string',
                'nullable',
            ],
            'visible_16' => [
                'string',
                'nullable',
            ],
            'visible_17' => [
                'string',
                'nullable',
            ],
            'visible_18' => [
                'string',
                'nullable',
            ],
            'visible_19' => [
                'string',
                'nullable',
            ],
            'visible_20' => [
                'string',
                'nullable',
            ],
            'tank'       => [
                'string',
                'nullable',
            ],
            'timestamp'  => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
