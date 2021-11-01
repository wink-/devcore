<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyValidationRequest;
use App\Http\Requests\Pacsys\StoreValidationRequest;
use App\Http\Requests\Pacsys\UpdateValidationRequest;
use App\Models\Pacsys\Validation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('validation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $validations = Validation::all();

        return view('pacsys.validations.index', compact('validations'));
    }

    public function create()
    {
        abort_if(Gate::denies('validation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.validations.create');
    }

    public function store(StoreValidationRequest $request)
    {
        $validation = Validation::create($request->all());

        return redirect()->route('pacsys.validations.index');
    }

    public function edit(Validation $validation)
    {
        abort_if(Gate::denies('validation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.validations.edit', compact('validation'));
    }

    public function update(UpdateValidationRequest $request, Validation $validation)
    {
        $validation->update($request->all());

        return redirect()->route('pacsys.validations.index');
    }

    public function show(Validation $validation)
    {
        abort_if(Gate::denies('validation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.validations.show', compact('validation'));
    }

    public function destroy(Validation $validation)
    {
        abort_if(Gate::denies('validation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $validation->delete();

        return back();
    }

    public function massDestroy(MassDestroyValidationRequest $request)
    {
        Validation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
