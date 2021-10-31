<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMethodRequest;
use App\Http\Requests\StoreMethodRequest;
use App\Http\Requests\UpdateMethodRequest;
use App\Models\Wipsys\Method;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MethodsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $methods = Method::all();

        return view('admin.methods.index', compact('methods'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.methods.create');
    }

    public function store(StoreMethodRequest $request)
    {
        $method = Method::create($request->all());

        return redirect()->route('admin.methods.index');
    }

    public function edit(Method $method)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.methods.edit', compact('method'));
    }

    public function update(UpdateMethodRequest $request, Method $method)
    {
        $method->update($request->all());

        return redirect()->route('admin.methods.index');
    }

    public function show(Method $method)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.methods.show', compact('method'));
    }

    public function destroy(Method $method)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $method->delete();

        return back();
    }

    public function massDestroy(MassDestroyMethodRequest $request)
    {
        Method::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
