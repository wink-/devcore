<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Sftuser;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySftuserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('sftuser_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:sftusers,id',
        ];
    }
}
