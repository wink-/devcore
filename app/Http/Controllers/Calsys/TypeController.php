<?php

namespace App\Http\Controllers\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\MassDestroyTypeRequest;
use App\Http\Requests\Calsys\StoreTypeRequest;
use App\Http\Requests\Calsys\UpdateTypeRequest;
use App\Models\Calsys\Type;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $types = Type::all();

        return view('calsys.types.index', compact('types'));
    }

    public function create()
    {
        abort_if(Gate::denies('calsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.types.create');
    }

    public function store(StoreTypeRequest $request)
    {
        $type = Type::create($request->all());

        return redirect()->route('calsys.cal-types.index');
    }

    public function edit(Type $type)
    {
        abort_if(Gate::denies('calsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.types.edit', compact('type'));
    }

    public function update(UpdateTypeRequest $request, Type $type)
    {
        $type->update($request->all());

        return redirect()->route('calsys.cal-types.index');
    }

    public function show(Type $type)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('calsys.types.show', compact('type'));
    }

    public function destroy(Type $type)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $type->delete();

        return back();
    }

    public function massDestroy(MassDestroyTypeRequest $request)
    {
        Type::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
