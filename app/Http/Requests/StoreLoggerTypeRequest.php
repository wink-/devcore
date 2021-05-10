<?php

namespace App\Http\Requests;

use App\Models\LoggerType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLoggerTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('logger_type_create');
    }

    public function rules()
    {
        return [
            'name'        => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
        ];
    }
}
