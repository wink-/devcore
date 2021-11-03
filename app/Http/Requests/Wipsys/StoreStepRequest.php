<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Step;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStepRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('step_create');
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
        ];
    }
}
