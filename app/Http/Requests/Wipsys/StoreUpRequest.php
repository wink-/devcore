<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Up;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUpRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('up_create');
    }

    public function rules()
    {
        return [
            'tracking_number'            => [
                'string',
                'nullable',
            ],
            'receiver_name'              => [
                'string',
                'nullable',
            ],
            'shipment_process_timestamp' => [
                'string',
                'nullable',
            ],
            'service_type'               => [
                'string',
                'nullable',
            ],
            'weight'                     => [
                'numeric',
            ],
            'ref_1'                      => [
                'string',
                'nullable',
            ],
            'ref_2'                      => [
                'string',
                'nullable',
            ],
            'ref_3'                      => [
                'string',
                'nullable',
            ],
            'ref_4'                      => [
                'string',
                'nullable',
            ],
            'ref_5'                      => [
                'string',
                'nullable',
            ],
            'revision'                   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
