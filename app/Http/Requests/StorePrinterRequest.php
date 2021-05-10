<?php

namespace App\Http\Requests;

use App\Models\Printer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePrinterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('printer_create');
    }

    public function rules()
    {
        return [
            'printer'     => [
                'string',
                'nullable',
            ],
            'description' => [
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
