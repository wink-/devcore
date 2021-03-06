<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Priority;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePriorityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('priority_create');
    }

    public function rules()
    {
        return [
            'code'        => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'image_key'   => [
                'string',
                'nullable',
            ],
            'revision'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
