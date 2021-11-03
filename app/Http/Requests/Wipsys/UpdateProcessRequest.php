<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Process;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProcessRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('process_edit');
    }

    public function rules()
    {
        return [
            'code'     => [
                'string',
                'max:10',
                'required',
                'unique:processes,code,' . request()->route('process')->id,
            ],
            'name'     => [
                'string',
                'required',
                'unique:processes,name,' . request()->route('process')->id,
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
