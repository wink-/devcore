<?php

namespace App\Http\Requests\ProcessData;

use App\Models\ProcessData\Logger;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLoggerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('processdata_edit');
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
            'ip_address'  => [
                'string',
                'nullable',
            ],
            'port'        => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
