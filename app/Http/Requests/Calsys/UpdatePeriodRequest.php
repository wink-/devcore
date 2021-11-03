<?php

namespace App\Http\Requests\Calsys;

use App\Models\Calsys\Period;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePeriodRequest extends FormRequest
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
