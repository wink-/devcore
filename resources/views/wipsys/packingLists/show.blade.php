@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.packingList.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.packing-lists.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.id') }}
                        </th>
                        <td>
                            {{ $packingList->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.number') }}
                        </th>
                        <td>
                            {{ $packingList->number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.date') }}
                        </th>
                        <td>
                            {{ $packingList->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.employee_code') }}
                        </th>
                        <td>
                            {{ $packingList->employee_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.user_code') }}
                        </th>
                        <td>
                            {{ $packingList->user_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $packingList->customer_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.destination_code') }}
                        </th>
                        <td>
                            {{ $packingList->destination_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.carrier_code') }}
                        </th>
                        <td>
                            {{ $packingList->carrier_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.freight_code') }}
                        </th>
                        <td>
                            {{ $packingList->freight_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.customer_purchase_order') }}
                        </th>
                        <td>
                            {{ $packingList->customer_purchase_order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.cod') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packingList->cod ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.date_received') }}
                        </th>
                        <td>
                            {{ $packingList->date_received }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.printed') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packingList->printed ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.session') }}
                        </th>
                        <td>
                            {{ $packingList->session }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packingList->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingList.fields.revision') }}
                        </th>
                        <td>
                            {{ $packingList->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.packing-lists.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection