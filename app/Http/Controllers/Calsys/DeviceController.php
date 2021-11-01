<?php

namespace App\Http\Controllers\Calsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calsys\MassDestroyDeviceRequest;
use App\Http\Requests\Calsys\StoreDeviceRequest;
use App\Http\Requests\Calsys\UpdateDeviceRequest;
use App\Models\Calsys\Device;
use App\Models\Calsys\Location;
use App\Models\Calsys\Owner;
use App\Models\Calsys\Period;
use App\Models\Calsys\Source;
use App\Models\Calsys\Type;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class DeviceController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('calsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Device::with(['source', 'type', 'period', 'location', 'owner'])->select(sprintf('%s.*', (new CalDevice)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'calsys_show';
                $editGate      = 'calsys_edit';
                $deleteGate    = 'calsys_delete';
                $crudRoutePart = 'cal-devices';

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
            $table->editColumn('serial_number', function ($row) {
                return $row->serial_number ? $row->serial_number : "";
            });
            $table->addColumn('source_name', function ($row) {
                return $row->source ? $row->source->name : '';
            });

            $table->addColumn('type_name', function ($row) {
                return $row->type ? $row->type->name : '';
            });

            $table->addColumn('period_name', function ($row) {
                return $row->period ? $row->period->name : '';
            });

            $table->addColumn('location_name', function ($row) {
                return $row->location ? $row->location->name : '';
            });

            $table->addColumn('owner_name', function ($row) {
                return $row->owner ? $row->owner->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'source', 'type', 'period', 'location', 'owner']);

            return $table->make(true);
        }

        return view('calsys.devices.index');
    }

    public function create()
    {
        abort_if(Gate::denies('calsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sources = Source::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $types = Type::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $periods = Period::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $owners = Owner::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('calsys.devices.create', compact('sources', 'types', 'periods', 'locations', 'owners'));
    }

    public function store(StoreDeviceRequest $request)
    {
        $device = Device::create($request->all());

        return redirect()->route('calsys.devices.index');
    }

    public function edit(Device $device)
    {
        abort_if(Gate::denies('calsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sources = Source::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $types = Type::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $periods = Period::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $owners = Owner::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $device->load('source', 'type', 'period', 'location', 'owner');

        return view('calsys.devices.edit', compact('sources', 'types', 'periods', 'locations', 'owners', 'calDevice'));
    }

    public function update(UpdateDeviceRequest $request, Device $device)
    {
        $device->update($request->all());

        return redirect()->route('calsys.devices.index');
    }

    public function show(Device $device)
    {
        abort_if(Gate::denies('calsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $device->load('source', 'type', 'period', 'location', 'owner');

        return view('calsys.devices.show', compact('calDevice'));
    }

    public function destroy(Device $device)
    {
        abort_if(Gate::denies('calsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $device->delete();

        return back();
    }

    public function massDestroy(MassDestroyDeviceRequest $request)
    {
        Device::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
