@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.calDevice.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('calsys.devices.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.calDevice.fields.id') }}
                        </th>
                        <td>
                            {{ $device->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calDevice.fields.name') }}
                        </th>
                        <td>
                            {{ $device->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calDevice.fields.description') }}
                        </th>
                        <td>
                            {{ $device->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calDevice.fields.serial_number') }}
                        </th>
                        <td>
                            {{ $device->serial_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calDevice.fields.source') }}
                        </th>
                        <td>
                            {{ $device->source->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calDevice.fields.type') }}
                        </th>
                        <td>
                            {{ $device->type->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calDevice.fields.period') }}
                        </th>
                        <td>
                            {{ $device->period->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calDevice.fields.location') }}
                        </th>
                        <td>
                            {{ $device->location->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calDevice.fields.init_date') }}
                        </th>
                        <td>
                            {{ $device->init_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calDevice.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $device->time_stamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calDevice.fields.owner') }}
                        </th>
                        <td>
                            {{ $device->owner->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('calsys.devices.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection