<?php

namespace App\Http\Requests\Calsys;

use App\Models\Calsys\CalibratedBy;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCalibratedByRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:calibrated_bies,id',
        ];
    }
}
