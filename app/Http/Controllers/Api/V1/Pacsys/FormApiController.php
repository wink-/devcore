<?php

namespace App\Http\Controllers\Api\V1\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\StoreFormRequest;
use App\Http\Requests\Pacsys\UpdateFormRequest;
use App\Http\Resources\Pacsys\FormResource;
use App\Models\Form;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormResource(Form::all());
    }

    public function store(StoreFormRequest $request)
    {
        $form = Form::create($request->all());

        return (new FormResource($form))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Form $form)
    {
        abort_if(Gate::denies('form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FormResource($form);
    }

    public function update(UpdateFormRequest $request, Form $form)
    {
        $form->update($request->all());

        return (new FormResource($form))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Form $form)
    {
        abort_if(Gate::denies('form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $form->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
