<?php

namespace App\Http\Requests;

use App\Models\CalcValue;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCalcValueRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('calc_value_edit');
    }

    public function rules()
    {
        return [
            'value_name'     => [
                'string',
                'nullable',
            ],
            'description'    => [
                'string',
                'nullable',
            ],
            'formula'        => [
                'string',
                'nullable',
            ],
            'order_calc'     => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'form_name'      => [
                'string',
                'nullable',
            ],
            'decimal_places' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'time_stamp'     => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
