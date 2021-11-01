<?php

namespace App\Http\Requests;

use App\Models\Workgroup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateWorkgroupRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('workgroup_edit');
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
