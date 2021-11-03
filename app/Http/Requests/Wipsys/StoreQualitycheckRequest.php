<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Qualitycheck;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreQualitycheckRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('qualitycheck_create');
    }

    public function rules()
    {
        return [
            'description' => [
                'string',
                'nullable',
            ],
        ];
    }
}
