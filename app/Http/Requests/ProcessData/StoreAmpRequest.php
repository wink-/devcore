<?php

namespace App\Http\Requests\ProcessData;

use App\Models\ProcessData\Amp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAmpRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('amp_create');
    }

    public function rules()
    {
        return [
            'amp'        => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'amp_minute' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
