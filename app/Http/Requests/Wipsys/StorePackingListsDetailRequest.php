<?php

namespace App\Http\Requests;

use App\Models\PackingListsDetail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePackingListsDetailRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('packing_lists_detail_create');
    }

    public function rules()
    {
        return [
            'packing_list_number'     => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'tag_number'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'work_order_number'       => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'part'                    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'part_number'             => [
                'string',
                'nullable',
            ],
            'customer_code'           => [
                'string',
                'nullable',
            ],
            'destination_code'        => [
                'string',
                'nullable',
            ],
            'process_code'            => [
                'string',
                'nullable',
            ],
            'method_code'             => [
                'string',
                'nullable',
            ],
            'customer_packing_list'   => [
                'string',
                'nullable',
            ],
            'customer_purchase_order' => [
                'string',
                'nullable',
            ],
            'certification_number'    => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'tag_quantity'            => [
                'numeric',
            ],
            'tag_quantity_shipped'    => [
                'numeric',
            ],
            'quantity'                => [
                'numeric',
            ],
            'shipped_amount'          => [
                'numeric',
            ],
            'packing_list_date'       => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_received'           => [
                'date_format:' . config('panel.date_format'),
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
