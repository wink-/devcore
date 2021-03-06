<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Employee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_create');
    }

    public function rules()
    {
        return [
            'name'     => [
                'string',
                'nullable',
            ],
            'code'     => [
                'string',
                'required',
                'unique:employees',
            ],
            'pin'      => [
                'string',
                'nullable',
            ],
            'password' => [
                'string',
                'nullable',
            ],
        ];
    }
}
