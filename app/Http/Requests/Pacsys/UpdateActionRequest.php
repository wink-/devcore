<?php

namespace App\Http\Requests;

use App\Models\Action;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateActionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pacsys');
    }

    public function rules()
    {
        return [
            'IDx'         => [
                'string',
                'nullable',
            ],
            'RecordName'  => [
                'string',
                'nullable',
            ],
            'FormName'    => [
                'string',
                'nullable',
            ],
            'ValueName'   => [
                'string',
                'nullable',
            ],
            'Value'        => [
                'string',
                'nullable',
            ],
            'RecDate'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'ActDate'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'RecEmpCode' => [
                'string',
                'nullable',
            ],
            'Unit'         => [
                'string',
                'nullable',
            ],
            'ActValue'    => [
                'string',
                'nullable',
            ],
            'ScopeName'   => [
                'string',
                'nullable',
            ],
            'Comment'      => [
                'string',
                'nullable',
            ],
            'Tank'         => [
                'string',
                'nullable',
            ],
            'TimeStamp'   => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'EmpName'     => [
                'string',
                'nullable',
            ],
            'IDy'         => [
                'string',
                'nullable',
            ],
            'ValueNum'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
