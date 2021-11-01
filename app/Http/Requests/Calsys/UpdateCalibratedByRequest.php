<?php

namespace App\Http\Requests;

use App\Models\CalibratedBy;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCalibratedByRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('calibrated_by_edit');
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
