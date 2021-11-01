<?php

namespace App\Http\Requests;

use App\Models\PUnit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPUnitRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('p_unit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:p_units,id',
        ];
    }
}
