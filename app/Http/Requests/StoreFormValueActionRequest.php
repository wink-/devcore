<?php

namespace App\Http\Requests;

use App\Models\FormValueAction;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFormValueActionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('form_value_action_create');
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
