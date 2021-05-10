<?php

namespace App\Http\Requests;

use App\Models\Contact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreContactRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_create');
    }

    public function rules()
    {
        return [
            'customer_code' => [
                'string',
                'nullable',
            ],
            'customer_name' => [
                'string',
                'nullable',
            ],
            'first_name'    => [
                'string',
                'nullable',
            ],
            'last_name'     => [
                'string',
                'nullable',
            ],
            'phone'         => [
                'string',
                'nullable',
            ],
            'extension'     => [
                'string',
                'nullable',
            ],
            'email'         => [
                'string',
                'nullable',
            ],
            'cell'          => [
                'string',
                'nullable',
            ],
            'fax'           => [
                'string',
                'nullable',
            ],
            'revision'      => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quote_emails'  => [
                'string',
                'nullable',
            ],
        ];
    }
}
