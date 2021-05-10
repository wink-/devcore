<?php

namespace App\Http\Requests;

use App\Models\Process;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProcessRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('process_create');
    }

    public function rules()
    {
        return [
            'code'     => [
                'string',
                'max:10',
                'required',
                'unique:processes',
            ],
            'name'     => [
                'string',
                'required',
                'unique:processes',
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
