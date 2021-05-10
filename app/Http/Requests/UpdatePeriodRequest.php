<?php

namespace App\Http\Requests;

use App\Models\Period;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePeriodRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('period_edit');
    }

    public function rules()
    {
        return [
            'period'      => [
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
