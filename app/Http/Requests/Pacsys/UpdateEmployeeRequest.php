<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\Employee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pacsys_edit');
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
