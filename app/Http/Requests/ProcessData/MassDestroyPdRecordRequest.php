<?php

namespace App\Http\Requests\ProcessData;

use App\Models\ProcessData\PdRecord;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPdRecordRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pd_record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:pd_records,id',
        ];
    }
}
