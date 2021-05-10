@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.carrier.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.carriers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.id') }}
                        </th>
                        <td>
                            {{ $carrier->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.code') }}
                        </th>
                        <td>
                            {{ $carrier->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.name') }}
                        </th>
                        <td>
                            {{ $carrier->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.physical_address') }}
                        </th>
                        <td>
                            {{ $carrier->physical_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.address_extension') }}
                        </th>
                        <td>
                            {{ $carrier->address_extension }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.payment_address') }}
                        </th>
                        <td>
                            {{ $carrier->payment_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.city') }}
                        </th>
                        <td>
                            {{ $carrier->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.state') }}
                        </th>
                        <td>
                            {{ $carrier->state }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.zip') }}
                        </th>
                        <td>
                            {{ $carrier->zip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.email') }}
                        </th>
                        <td>
                            {{ $carrier->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.company_phone') }}
                        </th>
                        <td>
                            {{ $carrier->company_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.fax') }}
                        </th>
                        <td>
                            {{ $carrier->fax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.note') }}
                        </th>
                        <td>
                            {{ $carrier->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $carrier->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carrier.fields.revision') }}
                        </th>
                        <td>
                            {{ $carrier->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.carriers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection