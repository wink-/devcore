<?php

namespace App\Http\Requests\Calsys;

use App\Models\Calsys\Type;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('calsys_create');
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
