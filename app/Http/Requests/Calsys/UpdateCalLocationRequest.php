<?php

namespace App\Http\Requests;

use App\Models\CalLocation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCalLocationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cal_location_edit');
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
