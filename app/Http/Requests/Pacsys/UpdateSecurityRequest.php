<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\Security;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSecurityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('security_edit');
    }

    public function rules()
    {
        return [
            'emp_code'   => [
                'string',
                'nullable',
            ],
            'scope'      => [
                'string',
                'nullable',
            ],
            'time_stamp' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
