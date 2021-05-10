<?php

namespace App\Http\Requests;

use App\Models\PEmployee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('p_employee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:p_employees,id',
        ];
    }
}
