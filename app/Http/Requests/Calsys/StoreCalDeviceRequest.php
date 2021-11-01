<?php

namespace App\Http\Requests;

use App\Models\CalDevice;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCalDeviceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cal_device_create');
    }

    public function rules()
    {
        return [
            'name'          => [
                'string',
                'nullable',
            ],
            'description'   => [
                'string',
                'nullable',
            ],
            'serial_number' => [
                'string',
                'nullable',
            ],
            'init_date'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'time_stamp'    => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
