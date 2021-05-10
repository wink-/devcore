<?php

namespace App\Http\Requests;

use App\Models\PdRecord;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePdRecordRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pd_record_edit');
    }

    public function rules()
    {
        return [
            'name'          => [
                'string',
                'nullable',
            ],
            'command'       => [
                'string',
                'nullable',
            ],
            'multiplier'    => [
                'numeric',
            ],
            'description'   => [
                'string',
                'nullable',
            ],
            'graph_y_lower' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'graph_y_upper' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
