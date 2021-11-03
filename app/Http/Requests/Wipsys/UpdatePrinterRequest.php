<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Printer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePrinterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('printer_edit');
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
