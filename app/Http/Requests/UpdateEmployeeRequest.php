<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_edit');
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
                'unique:employees,code,' . request()->route('employee')->id,
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
