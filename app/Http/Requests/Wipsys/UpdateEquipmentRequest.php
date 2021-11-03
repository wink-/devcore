<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Equipment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEquipmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('equipment_edit');
    }

    public function rules()
    {
        return [
            'code'        => [
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
