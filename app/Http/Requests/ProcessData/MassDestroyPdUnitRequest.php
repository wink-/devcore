<?php

namespace App\Http\Requests;

use App\Models\PdUnit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPdUnitRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pd_unit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:pd_units,id',
        ];
    }
}
