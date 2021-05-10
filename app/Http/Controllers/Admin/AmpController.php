<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAmpRequest;
use App\Http\Requests\StoreAmpRequest;
use App\Http\Requests\UpdateAmpRequest;
use App\Models\Amp;
use App\Models\PdRecord;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AmpController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('amp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Amp::with(['record'])->select(sprintf('%s.*', (new Amp)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'amp_show';
                $editGate      = 'amp_edit';
                $deleteGate    = 'amp_delete';
                $crudRoutePart = 'amps';

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
            $table->addColumn('record_name', function ($row) {
                return $row->record ? $row->record->name : '';
            });

            $table->editColumn('record.description', function ($row) {
                return $row->record ? (is_string($row->record) ? $row->record : $row->record->description) : '';
            });
            $table->editColumn('amp', function ($row) {
                return $row->amp ? $row->amp : "";
            });
            $table->editColumn('amp_minute', function ($row) {
                return $row->amp_minute ? $row->amp_minute : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'record']);

            return $table->make(true);
        }

        $pd_records = PdRecord::get();

        return view('admin.amps.index', compact('pd_records'));
    }

    public function create()
    {
        abort_if(Gate::denies('amp_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $records = PdRecord::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.amps.create', compact('records'));
    }

    public function store(StoreAmpRequest $request)
    {
        $amp = Amp::create($request->all());

        return redirect()->route('admin.amps.index');
    }

    public function edit(Amp $amp)
    {
        abort_if(Gate::denies('amp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $records = PdRecord::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $amp->load('record');

        return view('admin.amps.edit', compact('records', 'amp'));
    }

    public function update(UpdateAmpRequest $request, Amp $amp)
    {
        $amp->update($request->all());

        return redirect()->route('admin.amps.index');
    }

    public function show(Amp $amp)
    {
        abort_if(Gate::denies('amp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $amp->load('record');

        return view('admin.amps.show', compact('amp'));
    }

    public function destroy(Amp $amp)
    {
        abort_if(Gate::denies('amp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $amp->delete();

        return back();
    }

    public function massDestroy(MassDestroyAmpRequest $request)
    {
        Amp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
