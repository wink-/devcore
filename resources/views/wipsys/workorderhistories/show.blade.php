@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.workorderhistory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workorderhistories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.id') }}
                        </th>
                        <td>
                            {{ $workorderhistory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.number') }}
                        </th>
                        <td>
                            {{ $workorderhistory->number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $workorderhistory->customer_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $workorderhistory->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.part') }}
                        </th>
                        <td>
                            {{ $workorderhistory->part->number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.part_number') }}
                        </th>
                        <td>
                            {{ $workorderhistory->part_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.process_code') }}
                        </th>
                        <td>
                            {{ $workorderhistory->process_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.price') }}
                        </th>
                        <td>
                            {{ $workorderhistory->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.price_code') }}
                        </th>
                        <td>
                            {{ $workorderhistory->price_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.date_received') }}
                        </th>
                        <td>
                            {{ $workorderhistory->date_received }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.date_required') }}
                        </th>
                        <td>
                            {{ $workorderhistory->date_required }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.customer_purchase_order') }}
                        </th>
                        <td>
                            {{ $workorderhistory->customer_purchase_order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.customer_packing_list') }}
                        </th>
                        <td>
                            {{ $workorderhistory->customer_packing_list }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.quantity') }}
                        </th>
                        <td>
                            {{ $workorderhistory->quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.unit_code') }}
                        </th>
                        <td>
                            {{ $workorderhistory->unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.quantity_shipped') }}
                        </th>
                        <td>
                            {{ $workorderhistory->quantity_shipped }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.our_last_packing_list') }}
                        </th>
                        <td>
                            {{ $workorderhistory->our_last_packing_list }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.destination_code') }}
                        </th>
                        <td>
                            {{ $workorderhistory->destination_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.carrier_code') }}
                        </th>
                        <td>
                            {{ $workorderhistory->carrier_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.freight_code') }}
                        </th>
                        <td>
                            {{ $workorderhistory->freight_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.date_shipped') }}
                        </th>
                        <td>
                            {{ $workorderhistory->date_shipped }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.invoice_number') }}
                        </th>
                        <td>
                            {{ $workorderhistory->invoice_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.invoice_date') }}
                        </th>
                        <td>
                            {{ $workorderhistory->invoice_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.invoice_amount') }}
                        </th>
                        <td>
                            {{ $workorderhistory->invoice_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.priority') }}
                        </th>
                        <td>
                            {{ $workorderhistory->priority }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.rework') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorderhistory->rework ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.hot') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorderhistory->hot ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.started') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorderhistory->started ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.completed') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorderhistory->completed ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.shipped') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorderhistory->shipped ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.cod') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorderhistory->cod ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.invoiced') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorderhistory->invoiced ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.note') }}
                        </th>
                        <td>
                            {{ $workorderhistory->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.image_count') }}
                        </th>
                        <td>
                            {{ $workorderhistory->image_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorderhistory->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorderhistory.fields.revision') }}
                        </th>
                        <td>
                            {{ $workorderhistory->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workorderhistories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection