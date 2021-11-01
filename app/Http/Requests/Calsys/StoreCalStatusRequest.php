<?php

namespace App\Http\Requests;

use App\Models\CalStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCalStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cal_status_create');
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
