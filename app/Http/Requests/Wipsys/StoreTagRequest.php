<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Tag;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTagRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tag_create');
    }

    public function rules()
    {
        return [
            'number'            => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'work_order_number' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quantity'          => [
                'numeric',
            ],
            'quantity_shipped'  => [
                'numeric',
            ],
            'date_received'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'ordinal'           => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'container'         => [
                'string',
                'nullable',
            ],
            'sessionid'         => [
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
