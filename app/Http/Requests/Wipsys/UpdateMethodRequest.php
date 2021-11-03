<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Method;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMethodRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('method_edit');
    }

    public function rules()
    {
        return [
            'code'     => [
                'string',
                'required',
            ],
            'name'     => [
                'string',
                'nullable',
            ],
            'revision' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
