<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Workgroup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWorkgroupRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('workgroup_create');
    }

    public function rules()
    {
        return [
            'name'         => [
                'string',
                'nullable',
            ],
            'process_code' => [
                'string',
                'nullable',
            ],
            'method_code'  => [
                'string',
                'nullable',
            ],
            'step_code'    => [
                'string',
                'nullable',
            ],
            'revision'     => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
