<?php

namespace App\Http\Requests;

use App\Models\CalType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCalTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cal_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:cal_types,id',
        ];
    }
}
