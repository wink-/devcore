@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.workorder.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workorders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.id') }}
                        </th>
                        <td>
                            {{ $workorder->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.number') }}
                        </th>
                        <td>
                            {{ $workorder->number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $workorder->customer_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.part') }}
                        </th>
                        <td>
                            {{ $workorder->part->number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.part_number') }}
                        </th>
                        <td>
                            {{ $workorder->part_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.process_code') }}
                        </th>
                        <td>
                            {{ $workorder->process_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.price') }}
                        </th>
                        <td>
                            {{ $workorder->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.price_code') }}
                        </th>
                        <td>
                            {{ $workorder->price_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.date_received') }}
                        </th>
                        <td>
                            {{ $workorder->date_received }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.date_required') }}
                        </th>
                        <td>
                            {{ $workorder->date_required }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.customer_purchase_order') }}
                        </th>
                        <td>
                            {{ $workorder->customer_purchase_order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.customer_packing_list') }}
                        </th>
                        <td>
                            {{ $workorder->customer_packing_list }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.quantity') }}
                        </th>
                        <td>
                            {{ $workorder->quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.unit_code') }}
                        </th>
                        <td>
                            {{ $workorder->unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.quantity_shipped') }}
                        </th>
                        <td>
                            {{ $workorder->quantity_shipped }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.our_last_packing_list') }}
                        </th>
                        <td>
                            {{ $workorder->our_last_packing_list }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.destination_code') }}
                        </th>
                        <td>
                            {{ $workorder->destination_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.carrier_code') }}
                        </th>
                        <td>
                            {{ $workorder->carrier_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.freight_code') }}
                        </th>
                        <td>
                            {{ $workorder->freight_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.date_shipped') }}
                        </th>
                        <td>
                            {{ $workorder->date_shipped }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.invoice_number') }}
                        </th>
                        <td>
                            {{ $workorder->invoice_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.invoice_date') }}
                        </th>
                        <td>
                            {{ $workorder->invoice_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.invoice_amount') }}
                        </th>
                        <td>
                            {{ $workorder->invoice_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.priority') }}
                        </th>
                        <td>
                            {{ $workorder->priority }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.rework') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorder->rework ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.hot') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorder->hot ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.started') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorder->started ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.completed') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorder->completed ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.shipped') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorder->shipped ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.cod') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorder->cod ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.invoiced') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorder->invoiced ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.note') }}
                        </th>
                        <td>
                            {{ $workorder->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.image_count') }}
                        </th>
                        <td>
                            {{ $workorder->image_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorder->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.revision') }}
                        </th>
                        <td>
                            {{ $workorder->revision }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workorder.fields.printed') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workorder->printed ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workorders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection