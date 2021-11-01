<?php

namespace App\Http\Requests;

use App\Models\PackingListsDetail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPackingListsDetailRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('packing_lists_detail_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:packing_lists_details,id',
        ];
    }
}
