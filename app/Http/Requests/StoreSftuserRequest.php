<?php

namespace App\Http\Requests;

use App\Models\Sftuser;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSftuserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sftuser_create');
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
        ];
    }
}
