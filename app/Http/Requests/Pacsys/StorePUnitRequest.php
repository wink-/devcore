<?php

namespace App\Http\Requests;

use App\Models\PUnit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePUnitRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('p_unit_create');
    }

    public function rules()
    {
        return [
            'unit'        => [
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
