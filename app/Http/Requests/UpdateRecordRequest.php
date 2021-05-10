<?php

namespace App\Http\Requests;

use App\Models\Record;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRecordRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('record_edit');
    }

    public function rules()
    {
        return [
            'name'          => [
                'string',
                'nullable',
            ],
            'description'   => [
                'string',
                'nullable',
            ],
            'form_name'     => [
                'string',
                'nullable',
            ],
            'form_type'     => [
                'string',
                'nullable',
            ],
            'scope_name'    => [
                'string',
                'nullable',
            ],
            'image'         => [
                'string',
                'nullable',
            ],
            'time_stamp'    => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'capacity_old'  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'capacity_unit' => [
                'string',
                'nullable',
            ],
            'capacity'      => [
                'numeric',
            ],
        ];
    }
}
