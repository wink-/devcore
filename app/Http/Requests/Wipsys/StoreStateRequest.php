<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\State;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('state_create');
    }

    public function rules()
    {
        return [
            'code' => [
                'string',
                'nullable',
            ],
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
