<?php

namespace App\Http\Requests\Calsys;

use App\Models\Calsys\Owner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOwnerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('calsys_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
