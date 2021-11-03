<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Quote;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateQuoteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('quote_edit');
    }

    public function rules()
    {
        return [
            'customer_id' => [
                'required',
                'integer',
            ],
            'customer_code' => [
                'string',
                'nullable',
            ],
            'customer_name' => [
                'string',
                'nullable',
            ],
            'partid' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'part_number' => [
                'string',
                'required',
            ],
            'revision_code' => [
                'string',
                'nullable',
            ],
            'customer_rfq' => [
                'string',
                'nullable',
            ],
            'part_description' => [
                'string',
                'nullable',
            ],
            'specification' => [
                'string',
                'nullable',
            ],
            'material' => [
                'string',
                'nullable',
            ],
            'process_id' => [
                'required',
                'integer',
            ],
            'method_code' => [
                'string',
                'nullable',
            ],
            'method' => [
                'string',
                'nullable',
            ],
            'quantity_minimum' => [
                'string',
                'nullable',
            ],
            'quantity_maximum' => [
                'string',
                'nullable',
            ],
            'price' => [
                'required',
            ],
            'units' => [
                'string',
                'nullable',
            ],
            'minimum_lot_charge' => [
                'required',
            ],
            'quantity_price_break' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'weight' => [
                'string',
                'nullable',
            ],
            'surface_area' => [
                'string',
                'nullable',
            ],
            'thickness_minimum' => [
                'string',
                'nullable',
            ],
            'thickness_maximum' => [
                'string',
                'nullable',
            ],
            'baking_time_pre' => [
                'string',
                'nullable',
            ],
            'baking_temp_pre' => [
                'string',
                'nullable',
            ],
            'baking_time_post' => [
                'string',
                'nullable',
            ],
            'baking_temp_post' => [
                'string',
                'nullable',
            ],
            'bake_notes' => [
                'string',
                'nullable',
            ],
            'blast_notes' => [
                'string',
                'nullable',
            ],
            'mask_notes' => [
                'string',
                'nullable',
            ],
            'test_notes' => [
                'string',
                'nullable',
            ],
            'revision' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
