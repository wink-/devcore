<?php

namespace App\Http\Requests\Calsys;

use App\Models\Calsys\employee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateemployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('calemployee_edit');
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
