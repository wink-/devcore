<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormValueActionRequest;
use App\Http\Requests\UpdateFormValueActionRequest;
use App\Http\Resources\Admin\FormValueActionResource;
use App\Models\FormValueAction;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormValueActionApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_value_action_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueActionResource(FormValueAction::all());
    }

    public function store(StoreFormValueActionRequest $request)
    {
        $formValueAction = FormValueAction::create($request->all());

        return (new FormValueActionResource($formValueAction))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FormValueAction $formValueAction)
    {
        abort_if(Gate::denies('form_value_action_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormValueActionResource($formValueAction);
    }

    public function update(UpdateFormValueActionRequest $request, FormValueAction $formValueAction)
    {
        $formValueAction->update($request->all());

        return (new FormValueActionResource($formValueAction))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FormValueAction $formValueAction)
    {
        abort_if(Gate::denies('form_value_action_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueAction->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
