<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\Year;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateYearRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('year_edit');
    }

    public function rules()
    {
        return [
            'year' => [
                'string',
                'nullable',
            ],
        ];
    }
}
