<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Unit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUnitRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('unit_edit');
    }

    public function rules()
    {
        return [
            'code'          => [
                'string',
                'nullable',
            ],
            'description'   => [
                'string',
                'nullable',
            ],
            'name_singular' => [
                'string',
                'nullable',
            ],
            'name_plural'   => [
                'string',
                'nullable',
            ],
            'revision'      => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
