<?php

namespace App\Http\Requests\ProcessData;

use App\Models\ProcessData\Volt;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVoltRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('processdata_edit');
    }

    public function rules()
    {
        return [
            'volt' => [
                'numeric',
            ],
        ];
    }
}
