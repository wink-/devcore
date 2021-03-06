<?php

namespace App\Http\Requests\ProcessData;

use App\Models\ProcessData\Temperature;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTemperatureRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('processdata_create');
    }

    public function rules()
    {
        return [
            'temperature' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
