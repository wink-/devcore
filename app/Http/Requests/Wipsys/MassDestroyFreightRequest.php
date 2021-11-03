<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Freight;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFreightRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('freight_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:freights,id',
        ];
    }
}
