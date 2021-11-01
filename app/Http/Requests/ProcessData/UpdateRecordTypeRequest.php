<?php

namespace App\Http\Requests;

use App\Models\RecordType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRecordTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('record_type_edit');
    }

    public function rules()
    {
        return [
            'name'        => [
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
