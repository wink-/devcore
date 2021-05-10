<?php

namespace App\Http\Requests;

use App\Models\CalType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCalTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cal_type_create');
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
