<?php

namespace App\Http\Requests;

use App\Models\Calemployee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCalemployeeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('calemployee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:calemployees,id',
        ];
    }
}
