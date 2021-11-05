<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\Unit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyUnitRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pacsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:units,id',
        ];
    }
}
