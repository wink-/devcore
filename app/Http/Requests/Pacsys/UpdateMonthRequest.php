<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\Month;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMonthRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('month_edit');
    }

    public function rules()
    {
        return [
            'month_number' => [
                'string',
                'nullable',
            ],
            'month_name'   => [
                'string',
                'nullable',
            ],
        ];
    }
}
