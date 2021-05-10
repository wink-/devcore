<?php

namespace App\Http\Requests;

use App\Models\PackingList;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePackingListRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('packing_list_edit');
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
            'date'                    => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'employee_code'           => [
                'string',
                'nullable',
            ],
            'user_code'               => [
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
            'carrier_code'            => [
                'string',
                'nullable',
            ],
            'freight_code'            => [
                'string',
                'nullable',
            ],
            'customer_purchase_order' => [
                'string',
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
