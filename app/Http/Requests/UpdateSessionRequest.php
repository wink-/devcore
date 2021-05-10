<?php

namespace App\Http\Requests;

use App\Models\Session;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSessionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('session_edit');
    }

    public function rules()
    {
        return [
            'session'     => [
                'string',
                'nullable',
            ],
            'jwt'         => [
                'string',
                'nullable',
            ],
            'key_strokes' => [
                'string',
                'nullable',
            ],
            'user'        => [
                'string',
                'nullable',
            ],
            'email'       => [
                'string',
                'nullable',
            ],
            'userid'      => [
                'string',
                'nullable',
            ],
            'user_code'   => [
                'string',
                'nullable',
            ],
        ];
    }
}
