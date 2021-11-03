<?php

namespace App\Http\Requests\Wipsys;

use App\Models\Wipsys\Workorderhistory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWorkorderhistoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('workorderhistory_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:workorderhistories,id',
        ];
    }
}
