<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Up;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyUpRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('up_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:ups,id',
        ];
    }
}
