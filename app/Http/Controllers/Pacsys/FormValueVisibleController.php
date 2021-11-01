<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyFormValueVisibleRequest;
use App\Http\Requests\Pacsys\StoreFormValueVisibleRequest;
use App\Http\Requests\Pacsys\UpdateFormValueVisibleRequest;
use App\Models\Pacsys\FormValueVisible;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormValueVisibleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_value_visible_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueVisibles = FormValueVisible::all();

        return view('pacsys.formValueVisibles.index', compact('formValueVisibles'));
    }

    public function create()
    {
        abort_if(Gate::denies('form_value_visible_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueVisibles.create');
    }

    public function store(StoreFormValueVisibleRequest $request)
    {
        $formValueVisible = FormValueVisible::create($request->all());

        return redirect()->route('pacsys.form-value-visibles.index');
    }

    public function edit(FormValueVisible $formValueVisible)
    {
        abort_if(Gate::denies('form_value_visible_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueVisibles.edit', compact('formValueVisible'));
    }

    public function update(UpdateFormValueVisibleRequest $request, FormValueVisible $formValueVisible)
    {
        $formValueVisible->update($request->all());

        return redirect()->route('pacsys.form-value-visibles.index');
    }

    public function show(FormValueVisible $formValueVisible)
    {
        abort_if(Gate::denies('form_value_visible_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formValueVisibles.show', compact('formValueVisible'));
    }

    public function destroy(FormValueVisible $formValueVisible)
    {
        abort_if(Gate::denies('form_value_visible_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formValueVisible->delete();

        return back();
    }

    public function massDestroy(MassDestroyFormValueVisibleRequest $request)
    {
        FormValueVisible::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
