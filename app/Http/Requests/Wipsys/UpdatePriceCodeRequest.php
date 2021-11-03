<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\PriceCode;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePriceCodeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('price_code_edit');
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
            'revision'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
