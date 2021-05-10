<?php

namespace App\Http\Requests;

use App\Models\CalStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCalStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cal_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:cal_statuses,id',
        ];
    }
}
