<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\Form;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFormRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('form_create');
    }

    public function rules()
    {
        return [
            'name'               => [
                'string',
                'nullable',
            ],
            'description'        => [
                'string',
                'nullable',
            ],
            'form_type'          => [
                'string',
                'nullable',
            ],
            'time_stamp'         => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'revision'           => [
                'string',
                'nullable',
            ],
            'analysis_procedure' => [
                'string',
                'nullable',
            ],
        ];
    }
}
