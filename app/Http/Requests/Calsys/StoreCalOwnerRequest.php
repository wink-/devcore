<?php

namespace App\Http\Requests;

use App\Models\CalOwner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCalOwnerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cal_owner_create');
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
