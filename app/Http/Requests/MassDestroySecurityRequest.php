<?php

namespace App\Http\Requests;

use App\Models\Security;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySecurityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('security_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:securities,id',
        ];
    }
}
