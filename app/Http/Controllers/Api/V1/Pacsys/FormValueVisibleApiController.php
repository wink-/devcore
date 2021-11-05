<?php

namespace App\Http\Controllers\Api\V1\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\StoreFormValueVisibleRequest;
use App\Http\Requests\Pacsys\UpdateFormValueVisibleRequest;
use App\Http\Resources\Pacsys\FormValueVisibleResource;
use App\Models\FormValueVisible;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormValueVisibleApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_value_visible_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueVisibleResource(FormValueVisible::all());
    }

    public function store(StoreFormValueVisibleRequest $request)
    {
        $formValueVisible = FormValueVisible::create($request->all());

        return (new FormValueVisibleResource($formValueVisible))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FormValueVisible $formValueVisible)
    {
        abort_if(Gate::denies('form_value_visible_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueVisibleResource($formValueVisible);
    }

    public function update(UpdateFormValueVisibleRequest $request, FormValueVisible $formValueVisible)
    {
        $formValueVisible->update($request->all());

        return (new FormValueVisibleResource($formValueVisible))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FormValueVisible $formValueVisible)
    {
        abort_if(Gate::denies('form_value_visible_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueVisible->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
