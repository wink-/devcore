<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Sftuser;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSftuserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sftuser_edit');
    }

    public function rules()
    {
        return [
            'userid'   => [
                'string',
                'nullable',
            ],
            'code'     => [
                'string',
                'nullable',
            ],
            'user'     => [
                'string',
                'nullable',
            ],
            'email'    => [
                'string',
                'nullable',
            ],
            'password' => [
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
