<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Equipment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEquipmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('equipment_create');
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
