@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.quote.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.quotes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.id') }}
                        </th>
                        <td>
                            {{ $quote->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.customer') }}
                        </th>
                        <td>
                            {{ $quote->customer->code ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $quote->customer_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $quote->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.contact') }}
                        </th>
                        <td>
                            {{ $quote->contact->first_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.customer_rfq') }}
                        </th>
                        <td>
                            {{ $quote->customer_rfq }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.partid') }}
                        </th>
                        <td>
                            {{ $quote->partid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.part_number') }}
                        </th>
                        <td>
                            {{ $quote->part_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.revision_code') }}
                        </th>
                        <td>
                            {{ $quote->revision_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.part_description') }}
                        </th>
                        <td>
                            {{ $quote->part_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.specification') }}
                        </th>
                        <td>
                            {{ $quote->specification }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.material') }}
                        </th>
                        <td>
                            {{ $quote->material }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.process') }}
                        </th>
                        <td>
                            {{ $quote->process->code ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.method_code') }}
                        </th>
                        <td>
                            {{ $quote->method_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.method') }}
                        </th>
                        <td>
                            {{ $quote->method }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.quantity_minimum') }}
                        </th>
                        <td>
                            {{ $quote->quantity_minimum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.quantity_maximum') }}
                        </th>
                        <td>
                            {{ $quote->quantity_maximum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.price') }}
                        </th>
                        <td>
                            {{ $quote->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.units') }}
                        </th>
                        <td>
                            {{ $quote->units }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.minimum_lot_charge') }}
                        </th>
                        <td>
                            {{ $quote->minimum_lot_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.quantity_price_break') }}
                        </th>
                        <td>
                            {{ $quote->quantity_price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.price_break') }}
                        </th>
                        <td>
                            {{ $quote->price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.weight') }}
                        </th>
                        <td>
                            {{ $quote->weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.surface_area') }}
                        </th>
                        <td>
                            {{ $quote->surface_area }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.thickness_minimum') }}
                        </th>
                        <td>
                            {{ $quote->thickness_minimum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.thickness_maximum') }}
                        </th>
                        <td>
                            {{ $quote->thickness_maximum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.notes') }}
                        </th>
                        <td>
                            {{ $quote->notes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.comments') }}
                        </th>
                        <td>
                            {{ $quote->comments }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.baking') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $quote->baking ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.baking_time_pre') }}
                        </th>
                        <td>
                            {{ $quote->baking_time_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.baking_temp_pre') }}
                        </th>
                        <td>
                            {{ $quote->baking_temp_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.baking_time_post') }}
                        </th>
                        <td>
                            {{ $quote->baking_time_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.baking_temp_post') }}
                        </th>
                        <td>
                            {{ $quote->baking_temp_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.bake_notes') }}
                        </th>
                        <td>
                            {{ $quote->bake_notes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.blasting') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $quote->blasting ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.blast_notes') }}
                        </th>
                        <td>
                            {{ $quote->blast_notes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.masking') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $quote->masking ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.mask_notes') }}
                        </th>
                        <td>
                            {{ $quote->mask_notes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.testing') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $quote->testing ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.test_notes') }}
                        </th>
                        <td>
                            {{ $quote->test_notes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.user') }}
                        </th>
                        <td>
                            {{ $quote->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.value_min') }}
                        </th>
                        <td>
                            {{ $quote->value_min }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.value_max') }}
                        </th>
                        <td>
                            {{ $quote->value_max }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $quote->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.revision') }}
                        </th>
                        <td>
                            {{ $quote->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.quotes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection