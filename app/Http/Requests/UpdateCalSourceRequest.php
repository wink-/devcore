<?php

namespace App\Http\Requests;

use App\Models\CalSource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCalSourceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cal_source_edit');
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
