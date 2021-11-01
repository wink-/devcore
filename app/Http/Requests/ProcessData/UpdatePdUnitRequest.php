<?php

namespace App\Http\Requests;

use App\Models\PdUnit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePdUnitRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pd_unit_edit');
    }

    public function rules()
    {
        return [
            'name'        => [
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
