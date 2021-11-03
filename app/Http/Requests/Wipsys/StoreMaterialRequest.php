<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Material;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMaterialRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('material_create');
    }

    public function rules()
    {
        return [
            'name'        => [
                'string',
                'required',
            ],
            'description' => [
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
