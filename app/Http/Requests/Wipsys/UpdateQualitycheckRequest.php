<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Qualitycheck;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateQualitycheckRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('qualitycheck_edit');
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
