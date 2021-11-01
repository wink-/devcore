<?php

namespace App\Http\Requests;

use App\Models\CalDevice;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCalDeviceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cal_device_edit');
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
        ];
    }
}
