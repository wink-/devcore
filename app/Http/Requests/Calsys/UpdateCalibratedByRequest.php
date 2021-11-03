<?php

namespace App\Http\Requests\Calsys;

use App\Models\Calsys\ibratedBy;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateibratedByRequest extends FormRequest
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
