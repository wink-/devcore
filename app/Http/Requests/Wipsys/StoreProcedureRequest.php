<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Procedure;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProcedureRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('procedure_create');
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
            'document'      => [
                'string',
                'nullable',
            ],
            'minimum_price' => [
                'string',
                'nullable',
            ],
            'each_price'    => [
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
