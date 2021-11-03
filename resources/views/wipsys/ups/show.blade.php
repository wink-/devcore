@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.up.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.ups.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.id') }}
                        </th>
                        <td>
                            {{ $up->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.tracking_number') }}
                        </th>
                        <td>
                            {{ $up->tracking_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.receiver_name') }}
                        </th>
                        <td>
                            {{ $up->receiver_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.shipment_process_timestamp') }}
                        </th>
                        <td>
                            {{ $up->shipment_process_timestamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.service_type') }}
                        </th>
                        <td>
                            {{ $up->service_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.weight') }}
                        </th>
                        <td>
                            {{ $up->weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.ref_1') }}
                        </th>
                        <td>
                            {{ $up->ref_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.ref_2') }}
                        </th>
                        <td>
                            {{ $up->ref_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.ref_3') }}
                        </th>
                        <td>
                            {{ $up->ref_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.ref_4') }}
                        </th>
                        <td>
                            {{ $up->ref_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.ref_5') }}
                        </th>
                        <td>
                            {{ $up->ref_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $up->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.up.fields.revision') }}
                        </th>
                        <td>
                            {{ $up->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.ups.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection