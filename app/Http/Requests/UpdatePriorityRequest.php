<?php

namespace App\Http\Requests;

use App\Models\Priority;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePriorityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('priority_edit');
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
        ];
    }
}
