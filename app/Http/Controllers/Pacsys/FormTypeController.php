<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyFormTypeRequest;
use App\Http\Requests\Pacsys\StoreFormTypeRequest;
use App\Http\Requests\Pacsys\UpdateFormTypeRequest;
use App\Models\Pacsys\Pacsys\FormType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FormTypeController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('form_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = FormType::query()->select(sprintf('%s.*', (new FormType)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'form_type_show';
                $editGate      = 'form_type_edit';
                $deleteGate    = 'form_type_delete';
                $crudRoutePart = 'form-types';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('form_type', function ($row) {
                return $row->form_type ? $row->form_type : "";
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('pacsys.formTypes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('form_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formTypes.create');
    }

    public function store(StoreFormTypeRequest $request)
    {
        $formType = FormType::create($request->all());

        return redirect()->route('pacsys.form-types.index');
    }

    public function edit(FormType $formType)
    {
        abort_if(Gate::denies('form_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formTypes.edit', compact('formType'));
    }

    public function update(UpdateFormTypeRequest $request, FormType $formType)
    {
        $formType->update($request->all());

        return redirect()->route('pacsys.form-types.index');
    }

    public function show(FormType $formType)
    {
        abort_if(Gate::denies('form_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.formTypes.show', compact('formType'));
    }

    public function destroy(FormType $formType)
    {
        abort_if(Gate::denies('form_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formType->delete();

        return back();
    }

    public function massDestroy(MassDestroyFormTypeRequest $request)
    {
        FormType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
