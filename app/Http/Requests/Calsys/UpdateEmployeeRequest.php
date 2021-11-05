<?php

namespace App\Http\Requests\Calsys;

use App\Models\Calsys\Employee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('calsys_edit');
    }

    public function rules()
    {
        return [
            'iden'      => [
                'string',
                'nullable',
            ],
            'user_init' => [
                'string',
                'nullable',
            ],
            'name'      => [
                'string',
                'nullable',
            ],
        ];
    }
}
