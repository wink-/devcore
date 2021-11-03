<?php

namespace App\Http\Requests\ProcessData;

use App\Models\ProcessData\LoggerType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLoggerTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('logger_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:logger_types,id',
        ];
    }
}
