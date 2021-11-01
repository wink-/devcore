<?php

namespace App\Http\Controllers\Pacsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pacsys\MassDestroyFormRequest;
use App\Http\Requests\Pacsys\StoreFormRequest;
use App\Http\Requests\Pacsys\UpdateFormRequest;
use App\Models\Pacsys\Form;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FormController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Form::query()->select(sprintf('%s.*', (new Form)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'form_show';
                $editGate      = 'form_edit';
                $deleteGate    = 'form_delete';
                $crudRoutePart = 'forms';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });
            $table->editColumn('form_type', function ($row) {
                return $row->form_type ? $row->form_type : "";
            });

            $table->editColumn('archived', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->archived ? 'checked' : null) . '>';
            });
            $table->editColumn('revision', function ($row) {
                return $row->revision ? $row->revision : "";
            });
            $table->editColumn('analysis_procedure', function ($row) {
                return $row->analysis_procedure ? $row->analysis_procedure : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'archived']);

            return $table->make(true);
        }

        return view('pacsys.forms.index');
    }

    public function create()
    {
        abort_if(Gate::denies('form_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.forms.create');
    }

    public function store(StoreFormRequest $request)
    {
        $form = Form::create($request->all());

        return redirect()->route('pacsys.forms.index');
    }

    public function edit(Form $form)
    {
        abort_if(Gate::denies('form_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.forms.edit', compact('form'));
    }

    public function update(UpdateFormRequest $request, Form $form)
    {
        $form->update($request->all());

        return redirect()->route('pacsys.forms.index');
    }

    public function show(Form $form)
    {
        abort_if(Gate::denies('form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pacsys.forms.show', compact('form'));
    }

    public function destroy(Form $form)
    {
        abort_if(Gate::denies('form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $form->delete();

        return back();
    }

    public function massDestroy(MassDestroyFormRequest $request)
    {
        Form::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
