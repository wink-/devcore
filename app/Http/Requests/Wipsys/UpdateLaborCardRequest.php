<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\LaborCard;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLaborCardRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('labor_card_edit');
    }

    public function rules()
    {
        return [
            'work_order_number'  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'employee_code'      => [
                'string',
                'nullable',
            ],
            'step_code'          => [
                'string',
                'nullable',
            ],
            'job_date'           => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'time_of_day'        => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'actual_hours'       => [
                'numeric',
            ],
            'man_hours'          => [
                'numeric',
            ],
            'actual_pieces'      => [
                'numeric',
            ],
            'equipment_code'     => [
                'string',
                'nullable',
            ],
            'equipment_quantity' => [
                'numeric',
            ],
            'loads'              => [
                'numeric',
            ],
            'cycle_time'         => [
                'numeric',
            ],
            'time_finished'      => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'session'            => [
                'string',
                'nullable',
            ],
            'revision'           => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
