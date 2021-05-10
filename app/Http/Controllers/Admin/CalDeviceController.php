<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCalDeviceRequest;
use App\Http\Requests\StoreCalDeviceRequest;
use App\Http\Requests\UpdateCalDeviceRequest;
use App\Models\CalDevice;
use App\Models\CalLocation;
use App\Models\CalOwner;
use App\Models\CalPeriod;
use App\Models\CalSource;
use App\Models\CalType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CalDeviceController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('cal_device_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = CalDevice::with(['source', 'type', 'period', 'location', 'owner'])->select(sprintf('%s.*', (new CalDevice)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'cal_device_show';
                $editGate      = 'cal_device_edit';
                $deleteGate    = 'cal_device_delete';
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

        return view('admin.calDevices.index');
    }

    public function create()
    {
        abort_if(Gate::denies('cal_device_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sources = CalSource::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $types = CalType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $periods = CalPeriod::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = CalLocation::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $owners = CalOwner::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.calDevices.create', compact('sources', 'types', 'periods', 'locations', 'owners'));
    }

    public function store(StoreCalDeviceRequest $request)
    {
        $calDevice = CalDevice::create($request->all());

        return redirect()->route('admin.cal-devices.index');
    }

    public function edit(CalDevice $calDevice)
    {
        abort_if(Gate::denies('cal_device_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sources = CalSource::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $types = CalType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $periods = CalPeriod::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = CalLocation::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $owners = CalOwner::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $calDevice->load('source', 'type', 'period', 'location', 'owner');

        return view('admin.calDevices.edit', compact('sources', 'types', 'periods', 'locations', 'owners', 'calDevice'));
    }

    public function update(UpdateCalDeviceRequest $request, CalDevice $calDevice)
    {
        $calDevice->update($request->all());

        return redirect()->route('admin.cal-devices.index');
    }

    public function show(CalDevice $calDevice)
    {
        abort_if(Gate::denies('cal_device_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calDevice->load('source', 'type', 'period', 'location', 'owner');

        return view('admin.calDevices.show', compact('calDevice'));
    }

    public function destroy(CalDevice $calDevice)
    {
        abort_if(Gate::denies('cal_device_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calDevice->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalDeviceRequest $request)
    {
        CalDevice::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
