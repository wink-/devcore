<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\ActionsTemp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateActionsTempRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('actions_temp_edit');
    }

    public function rules()
    {
        return [
            'i_dx'         => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'record_name'  => [
                'string',
                'nullable',
            ],
            'form_name'    => [
                'string',
                'nullable',
            ],
            'value_name'   => [
                'string',
                'nullable',
            ],
            'value'        => [
                'string',
                'nullable',
            ],
            'rec_date'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'act_date'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'rec_emp_code' => [
                'string',
                'nullable',
            ],
            'unit'         => [
                'string',
                'nullable',
            ],
            'act_value'    => [
                'string',
                'nullable',
            ],
            'scope_name'   => [
                'string',
                'nullable',
            ],
            'comment'      => [
                'string',
                'nullable',
            ],
            'tank'         => [
                'string',
                'nullable',
            ],
            'time_stamp'   => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'emp_name'     => [
                'string',
                'nullable',
            ],
            'i_dy'         => [
                'string',
                'nullable',
            ],
            'value_num'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
