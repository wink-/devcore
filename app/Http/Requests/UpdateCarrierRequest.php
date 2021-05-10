<?php

namespace App\Http\Requests;

use App\Models\Carrier;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCarrierRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('carrier_edit');
    }

    public function rules()
    {
        return [
            'code'              => [
                'string',
                'required',
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
            'payment_address'   => [
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
            'email'             => [
                'string',
                'nullable',
            ],
            'company_phone'     => [
                'string',
                'nullable',
            ],
            'fax'               => [
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
