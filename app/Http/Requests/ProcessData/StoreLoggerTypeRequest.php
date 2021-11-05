<?php

namespace App\Http\Requests\ProcessData;

use App\Models\ProcessData\LoggerType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLoggerTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('processdata_create');
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
