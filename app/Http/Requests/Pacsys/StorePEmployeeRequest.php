<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\PEmployee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('p_employee_create');
    }

    public function rules()
    {
        return [
            'name'      => [
                'string',
                'nullable',
            ],
            'user_name' => [
                'string',
                'nullable',
            ],
            'code'      => [
                'string',
                'nullable',
            ],
        ];
    }
}
