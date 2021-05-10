<?php

namespace App\Http\Requests;

use App\Models\Period;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePeriodRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('period_create');
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
