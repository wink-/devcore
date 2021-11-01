<?php

namespace App\Http\Requests;

use App\Models\Logger;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLoggerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('logger_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:loggers,id',
        ];
    }
}
