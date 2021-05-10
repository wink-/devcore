<?php

namespace App\Http\Requests;

use App\Models\Destination;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDestinationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('destination_create');
    }

    public function rules()
    {
        return [
            'code'              => [
                'string',
                'required',
                'unique:destinations',
            ],
            'name'              => [
                'string',
                'nullable',
            ],
            'physical_address'  => [
                'string',
                'nullable',
            ],
            'address_extension' => [
                'string',
                'nullable',
            ],
            'city'              => [
                'string',
                'nullable',
            ],
            'state'             => [
                'string',
                'nullable',
            ],
            'zip'               => [
                'string',
                'nullable',
            ],
            'contact_1'         => [
                'string',
                'nullable',
            ],
            'company_phone'     => [
                'string',
                'nullable',
            ],
            'phone_1'           => [
                'string',
                'nullable',
            ],
            'extension_1'       => [
                'string',
                'nullable',
            ],
            'contact_2'         => [
                'string',
                'nullable',
            ],
            'phone_2'           => [
                'string',
                'nullable',
            ],
            'extension_2'       => [
                'string',
                'nullable',
            ],
            'fax'               => [
                'string',
                'nullable',
            ],
            'email'             => [
                'string',
                'nullable',
            ],
            'revision'          => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
