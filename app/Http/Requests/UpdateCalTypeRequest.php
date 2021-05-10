<?php

namespace App\Http\Requests;

use App\Models\CalType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCalTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cal_type_edit');
    }

    public function rules()
    {
        return [
            'name'      => [
                'string',
                'nullable',
            ],
            'proc_link' => [
                'string',
                'nullable',
            ],
        ];
    }
}
