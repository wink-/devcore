<?php

namespace App\Http\Requests;

use App\Models\CalOwner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCalOwnerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cal_owner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:cal_owners,id',
        ];
    }
}
