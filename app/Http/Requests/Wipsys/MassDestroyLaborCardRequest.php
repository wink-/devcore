<?php

namespace App\Http\Requests;

use App\Models\LaborCard;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLaborCardRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('labor_card_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:labor_cards,id',
        ];
    }
}
