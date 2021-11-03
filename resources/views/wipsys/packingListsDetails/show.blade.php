@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.packingListsDetail.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.packing-lists-details.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.id') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.packing_list_number') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->packing_list_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.tag_number') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->tag_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.work_order_number') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->work_order_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.part') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->part }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.part_number') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->part_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->customer_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.destination_code') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->destination_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.process_code') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->process_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.method_code') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->method_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.customer_packing_list') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->customer_packing_list }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.customer_purchase_order') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->customer_purchase_order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.certification_number') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->certification_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.certify') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packingListsDetail->certify ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.tag_quantity') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->tag_quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.tag_quantity_shipped') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->tag_quantity_shipped }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.quantity') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.shipped_amount') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->shipped_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.packing_list_date') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->packing_list_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.date_received') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->date_received }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.session') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->session }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packingListsDetail->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packingListsDetail.fields.revision') }}
                        </th>
                        <td>
                            {{ $packingListsDetail->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.packing-lists-details.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection