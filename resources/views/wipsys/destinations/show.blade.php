@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.destination.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.destinations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.id') }}
                        </th>
                        <td>
                            {{ $destination->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.code') }}
                        </th>
                        <td>
                            {{ $destination->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.name') }}
                        </th>
                        <td>
                            {{ $destination->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.physical_address') }}
                        </th>
                        <td>
                            {{ $destination->physical_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.address_extension') }}
                        </th>
                        <td>
                            {{ $destination->address_extension }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.city') }}
                        </th>
                        <td>
                            {{ $destination->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.state') }}
                        </th>
                        <td>
                            {{ $destination->state }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.zip') }}
                        </th>
                        <td>
                            {{ $destination->zip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $destination->customer_code->code ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.contact_1') }}
                        </th>
                        <td>
                            {{ $destination->contact_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.company_phone') }}
                        </th>
                        <td>
                            {{ $destination->company_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.phone_1') }}
                        </th>
                        <td>
                            {{ $destination->phone_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.extension_1') }}
                        </th>
                        <td>
                            {{ $destination->extension_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.contact_2') }}
                        </th>
                        <td>
                            {{ $destination->contact_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.phone_2') }}
                        </th>
                        <td>
                            {{ $destination->phone_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.extension_2') }}
                        </th>
                        <td>
                            {{ $destination->extension_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.fax') }}
                        </th>
                        <td>
                            {{ $destination->fax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.email') }}
                        </th>
                        <td>
                            {{ $destination->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.note') }}
                        </th>
                        <td>
                            {{ $destination->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $destination->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.revision') }}
                        </th>
                        <td>
                            {{ $destination->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.destinations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection