<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Workorder;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWorkorderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('workorder_create');
    }

    public function rules()
    {
        return [
            'customer_code'           => [
                'string',
                'required',
            ],
            'part_id'                 => [
                'required',
                'integer',
            ],
            'part_number'             => [
                'string',
                'nullable',
            ],
            'process_code'            => [
                'string',
                'nullable',
            ],
            'price_code'              => [
                'string',
                'nullable',
            ],
            'date_received'           => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_required'           => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'customer_purchase_order' => [
                'string',
                'nullable',
            ],
            'customer_packing_list'   => [
                'string',
                'nullable',
            ],
            'quantity'                => [
                'string',
                'required',
            ],
            'unit_code'               => [
                'string',
                'nullable',
            ],
            'destination_code'        => [
                'string',
                'nullable',
            ],
            'carrier_code'            => [
                'string',
                'nullable',
            ],
            'freight_code'            => [
                'string',
                'nullable',
            ],
            'priority'                => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
