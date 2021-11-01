<?php

namespace App\Http\Requests;

use App\Models\Customer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_edit');
    }

    public function rules()
    {
        return [
            'code'                 => [
                'string',
                'max:10',
                'required',
                'unique:customers,code,' . request()->route('customer')->id,
            ],
            'name'                 => [
                'string',
                'max:228',
                'required',
            ],
            'physical_address'     => [
                'string',
                'max:228',
                'nullable',
            ],
            'address_extension'    => [
                'string',
                'max:228',
                'nullable',
            ],
            'city'                 => [
                'string',
                'max:228',
                'nullable',
            ],
            'state'                => [
                'string',
                'max:2',
                'nullable',
            ],
            'zip'                  => [
                'string',
                'max:10',
                'nullable',
            ],
            'destination_code'     => [
                'string',
                'max:10',
                'nullable',
            ],
            'packing_list_copies'  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'contact_1'            => [
                'string',
                'max:25',
                'nullable',
            ],
            'company_phone'        => [
                'string',
                'max:13',
                'nullable',
            ],
            'extension_1'          => [
                'string',
                'max:4',
                'nullable',
            ],
            'contact_2'            => [
                'string',
                'max:25',
                'nullable',
            ],
            'phone_2'              => [
                'string',
                'max:13',
                'nullable',
            ],
            'extension_2'          => [
                'string',
                'max:4',
                'nullable',
            ],
            'fax'                  => [
                'string',
                'max:13',
                'nullable',
            ],
            'email'                => [
                'string',
                'max:228',
                'nullable',
            ],
            'invoice_emails'       => [
                'string',
                'nullable',
            ],
            'tax'                  => [
                'string',
                'max:228',
                'nullable',
            ],
            'billing_address'      => [
                'string',
                'nullable',
            ],
            'billing_city'         => [
                'string',
                'nullable',
            ],
            'billing_state'        => [
                'string',
                'nullable',
            ],
            'billing_zip'          => [
                'string',
                'nullable',
            ],
            'billing_phone'        => [
                'string',
                'nullable',
            ],
            'billing_fax'          => [
                'string',
                'nullable',
            ],
            'billing_email'        => [
                'string',
                'nullable',
            ],
            'ship_to_addressid'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'ship_to_address_code' => [
                'string',
                'nullable',
            ],
            'ship_to_address'      => [
                'string',
                'nullable',
            ],
            'ship_to_city'         => [
                'string',
                'nullable',
            ],
            'ship_to_state'        => [
                'string',
                'nullable',
            ],
            'ship_to_zip'          => [
                'string',
                'nullable',
            ],
            'ship_to_phone'        => [
                'string',
                'nullable',
            ],
            'ship_to_fax'          => [
                'string',
                'nullable',
            ],
            'ship_to_email'        => [
                'string',
                'nullable',
            ],
            'revision'             => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'carrier_code'         => [
                'string',
                'max:10',
                'nullable',
            ],
        ];
    }
}
