<?php

namespace App\Http\Requests\Pacsys;

use App\Models\Pacsys\Record;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRecordRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:records,id',
        ];
    }
}
