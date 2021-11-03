<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\Scope;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateScopeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('scope_edit');
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
            'time_stamp'  => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
