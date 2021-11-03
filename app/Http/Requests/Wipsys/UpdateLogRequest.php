<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Log;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLogRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('log_edit');
    }

    public function rules()
    {
        return [
            'session'     => [
                'string',
                'nullable',
            ],
            'key_strokes' => [
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
