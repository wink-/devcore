<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Partshistory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPartshistoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('partshistory_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:partshistories,id',
        ];
    }
}
