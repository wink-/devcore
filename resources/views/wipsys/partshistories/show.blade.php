@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.partshistory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.partshistories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.id') }}
                        </th>
                        <td>
                            {{ $partshistory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.number') }}
                        </th>
                        <td>
                            {{ $partshistory->number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.description') }}
                        </th>
                        <td>
                            {{ $partshistory->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $partshistory->customer_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $partshistory->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.process_code') }}
                        </th>
                        <td>
                            {{ $partshistory->process_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.method_code') }}
                        </th>
                        <td>
                            {{ $partshistory->method_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.price') }}
                        </th>
                        <td>
                            {{ $partshistory->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.price_code') }}
                        </th>
                        <td>
                            {{ $partshistory->price_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.price_break') }}
                        </th>
                        <td>
                            {{ $partshistory->price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quantity_price_break') }}
                        </th>
                        <td>
                            {{ $partshistory->quantity_price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.minimum_lot_charge') }}
                        </th>
                        <td>
                            {{ $partshistory->minimum_lot_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.minimum_line_charge') }}
                        </th>
                        <td>
                            {{ $partshistory->minimum_line_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quote') }}
                        </th>
                        <td>
                            {{ $partshistory->quote }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.certify') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partshistory->certify ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.specification') }}
                        </th>
                        <td>
                            {{ $partshistory->specification }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.bake') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partshistory->bake ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.baking_time_pre') }}
                        </th>
                        <td>
                            {{ $partshistory->baking_time_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.baking_temp_pre') }}
                        </th>
                        <td>
                            {{ $partshistory->baking_temp_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.baking_time_post') }}
                        </th>
                        <td>
                            {{ $partshistory->baking_time_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.baking_temp_post') }}
                        </th>
                        <td>
                            {{ $partshistory->baking_temp_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.procedure_code') }}
                        </th>
                        <td>
                            {{ $partshistory->procedure_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.material') }}
                        </th>
                        <td>
                            {{ $partshistory->material }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.material_name') }}
                        </th>
                        <td>
                            {{ $partshistory->material_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.material_condition') }}
                        </th>
                        <td>
                            {{ $partshistory->material_condition }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.thickness_minimum') }}
                        </th>
                        <td>
                            {{ $partshistory->thickness_minimum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.thickness_maximum') }}
                        </th>
                        <td>
                            {{ $partshistory->thickness_maximum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.thickness_unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->thickness_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.surface_area') }}
                        </th>
                        <td>
                            {{ $partshistory->surface_area }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.surface_area_unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->surface_area_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.weight') }}
                        </th>
                        <td>
                            {{ $partshistory->weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.weight_unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->weight_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.length') }}
                        </th>
                        <td>
                            {{ $partshistory->length }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.width') }}
                        </th>
                        <td>
                            {{ $partshistory->width }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.height') }}
                        </th>
                        <td>
                            {{ $partshistory->height }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.dimension_unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->dimension_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.material_thickness') }}
                        </th>
                        <td>
                            {{ $partshistory->material_thickness }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.material_thickness_unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->material_thickness_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.note') }}
                        </th>
                        <td>
                            {{ $partshistory->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.special_requirement') }}
                        </th>
                        <td>
                            {{ $partshistory->special_requirement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.operator_note') }}
                        </th>
                        <td>
                            {{ $partshistory->operator_note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_1') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_2') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_3') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_4') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_5') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_6') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.image_count') }}
                        </th>
                        <td>
                            {{ $partshistory->image_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.session') }}
                        </th>
                        <td>
                            {{ $partshistory->session }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partshistory->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.revision') }}
                        </th>
                        <td>
                            {{ $partshistory->revision }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.number') }}
                        </th>
                        <td>
                            {{ $partshistory->number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.description') }}
                        </th>
                        <td>
                            {{ $partshistory->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $partshistory->customer_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $partshistory->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.process_code') }}
                        </th>
                        <td>
                            {{ $partshistory->process_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.method_code') }}
                        </th>
                        <td>
                            {{ $partshistory->method_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.price') }}
                        </th>
                        <td>
                            {{ $partshistory->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.price_code') }}
                        </th>
                        <td>
                            {{ $partshistory->price_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.price_break') }}
                        </th>
                        <td>
                            {{ $partshistory->price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quantity_price_break') }}
                        </th>
                        <td>
                            {{ $partshistory->quantity_price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.minimum_lot_charge') }}
                        </th>
                        <td>
                            {{ $partshistory->minimum_lot_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.minimum_line_charge') }}
                        </th>
                        <td>
                            {{ $partshistory->minimum_line_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quote') }}
                        </th>
                        <td>
                            {{ $partshistory->quote }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.certify') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partshistory->certify ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.specification') }}
                        </th>
                        <td>
                            {{ $partshistory->specification }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.bake') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partshistory->bake ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.baking_time_pre') }}
                        </th>
                        <td>
                            {{ $partshistory->baking_time_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.baking_temp_pre') }}
                        </th>
                        <td>
                            {{ $partshistory->baking_temp_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.baking_time_post') }}
                        </th>
                        <td>
                            {{ $partshistory->baking_time_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.baking_temp_post') }}
                        </th>
                        <td>
                            {{ $partshistory->baking_temp_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.procedure_code') }}
                        </th>
                        <td>
                            {{ $partshistory->procedure_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.material') }}
                        </th>
                        <td>
                            {{ $partshistory->material }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.material_name') }}
                        </th>
                        <td>
                            {{ $partshistory->material_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.material_condition') }}
                        </th>
                        <td>
                            {{ $partshistory->material_condition }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.thickness_minimum') }}
                        </th>
                        <td>
                            {{ $partshistory->thickness_minimum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.thickness_maximum') }}
                        </th>
                        <td>
                            {{ $partshistory->thickness_maximum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.thickness_unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->thickness_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.surface_area') }}
                        </th>
                        <td>
                            {{ $partshistory->surface_area }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.surface_area_unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->surface_area_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.weight') }}
                        </th>
                        <td>
                            {{ $partshistory->weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.weight_unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->weight_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.length') }}
                        </th>
                        <td>
                            {{ $partshistory->length }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.width') }}
                        </th>
                        <td>
                            {{ $partshistory->width }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.height') }}
                        </th>
                        <td>
                            {{ $partshistory->height }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.dimension_unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->dimension_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.material_thickness') }}
                        </th>
                        <td>
                            {{ $partshistory->material_thickness }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.material_thickness_unit_code') }}
                        </th>
                        <td>
                            {{ $partshistory->material_thickness_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.note') }}
                        </th>
                        <td>
                            {{ $partshistory->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.special_requirement') }}
                        </th>
                        <td>
                            {{ $partshistory->special_requirement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.operator_note') }}
                        </th>
                        <td>
                            {{ $partshistory->operator_note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_1') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_2') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_3') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_4') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_5') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.quality_check_6') }}
                        </th>
                        <td>
                            {{ $partshistory->quality_check_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.image_count') }}
                        </th>
                        <td>
                            {{ $partshistory->image_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.session') }}
                        </th>
                        <td>
                            {{ $partshistory->session }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partshistory->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partshistory.fields.revision') }}
                        </th>
                        <td>
                            {{ $partshistory->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.partshistories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection