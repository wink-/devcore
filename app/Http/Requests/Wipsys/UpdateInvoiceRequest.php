<?php

namespace App\Http\Requests;

use App\Models\Invoice;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInvoiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('invoice_edit');
    }

    public function rules()
    {
        return [
            'number'                  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'customer_code'           => [
                'string',
                'nullable',
            ],
            'customer_purchase_order' => [
                'string',
                'nullable',
            ],
            'date'                    => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'emails'                  => [
                'string',
                'nullable',
            ],
            'session'                 => [
                'string',
                'nullable',
            ],
            'revision'                => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
