<?php

namespace App\Http\Requests;

use App\Models\Volt;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVoltRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('volt_edit');
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
