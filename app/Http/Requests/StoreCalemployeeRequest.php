<?php

namespace App\Http\Requests;

use App\Models\Calemployee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCalemployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('calemployee_create');
    }

    public function rules()
    {
        return [
            'iden'      => [
                'string',
                'nullable',
            ],
            'user_init' => [
                'string',
                'nullable',
            ],
            'name'      => [
                'string',
                'nullable',
            ],
        ];
    }
}
