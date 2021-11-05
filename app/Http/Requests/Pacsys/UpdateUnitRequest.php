<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\Unit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUnitRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pacsys_edit');
    }

    public function rules()
    {
        return [
            'unit'        => [
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
