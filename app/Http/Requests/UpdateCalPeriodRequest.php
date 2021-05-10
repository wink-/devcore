<?php

namespace App\Http\Requests;

use App\Models\CalPeriod;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCalPeriodRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cal_period_edit');
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
