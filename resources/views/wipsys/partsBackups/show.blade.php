@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.partsBackup.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.parts-backups.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.id') }}
                        </th>
                        <td>
                            {{ $partsBackup->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.number') }}
                        </th>
                        <td>
                            {{ $partsBackup->number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.description') }}
                        </th>
                        <td>
                            {{ $partsBackup->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->customer_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $partsBackup->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.process_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->process_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.method_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->method_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.price') }}
                        </th>
                        <td>
                            {{ $partsBackup->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.price_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->price_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.price_break') }}
                        </th>
                        <td>
                            {{ $partsBackup->price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quantity_price_break') }}
                        </th>
                        <td>
                            {{ $partsBackup->quantity_price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.minimum_lot_charge') }}
                        </th>
                        <td>
                            {{ $partsBackup->minimum_lot_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.minimum_line_charge') }}
                        </th>
                        <td>
                            {{ $partsBackup->minimum_line_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quote') }}
                        </th>
                        <td>
                            {{ $partsBackup->quote }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.certify') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partsBackup->certify ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.specification') }}
                        </th>
                        <td>
                            {{ $partsBackup->specification }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.bake') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partsBackup->bake ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.baking_time_pre') }}
                        </th>
                        <td>
                            {{ $partsBackup->baking_time_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.baking_temp_pre') }}
                        </th>
                        <td>
                            {{ $partsBackup->baking_temp_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.baking_time_post') }}
                        </th>
                        <td>
                            {{ $partsBackup->baking_time_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.baking_temp_post') }}
                        </th>
                        <td>
                            {{ $partsBackup->baking_temp_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.procedure_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->procedure_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.material') }}
                        </th>
                        <td>
                            {{ $partsBackup->material }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.material_name') }}
                        </th>
                        <td>
                            {{ $partsBackup->material_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.material_condition') }}
                        </th>
                        <td>
                            {{ $partsBackup->material_condition }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.thickness_minimum') }}
                        </th>
                        <td>
                            {{ $partsBackup->thickness_minimum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.thickness_maximum') }}
                        </th>
                        <td>
                            {{ $partsBackup->thickness_maximum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.thickness_unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->thickness_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.surface_area') }}
                        </th>
                        <td>
                            {{ $partsBackup->surface_area }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.surface_area_unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->surface_area_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.weight') }}
                        </th>
                        <td>
                            {{ $partsBackup->weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.weight_unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->weight_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.length') }}
                        </th>
                        <td>
                            {{ $partsBackup->length }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.width') }}
                        </th>
                        <td>
                            {{ $partsBackup->width }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.height') }}
                        </th>
                        <td>
                            {{ $partsBackup->height }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.dimension_unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->dimension_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.material_thickness') }}
                        </th>
                        <td>
                            {{ $partsBackup->material_thickness }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.material_thickness_unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->material_thickness_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.note') }}
                        </th>
                        <td>
                            {{ $partsBackup->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.special_requirement') }}
                        </th>
                        <td>
                            {{ $partsBackup->special_requirement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.operator_note') }}
                        </th>
                        <td>
                            {{ $partsBackup->operator_note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_1') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_2') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_3') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_4') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_5') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_6') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.image_count') }}
                        </th>
                        <td>
                            {{ $partsBackup->image_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.session') }}
                        </th>
                        <td>
                            {{ $partsBackup->session }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partsBackup->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.revision') }}
                        </th>
                        <td>
                            {{ $partsBackup->revision }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.number') }}
                        </th>
                        <td>
                            {{ $partsBackup->number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.description') }}
                        </th>
                        <td>
                            {{ $partsBackup->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->customer_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $partsBackup->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.process_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->process_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.method_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->method_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.price') }}
                        </th>
                        <td>
                            {{ $partsBackup->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.price_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->price_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.price_break') }}
                        </th>
                        <td>
                            {{ $partsBackup->price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quantity_price_break') }}
                        </th>
                        <td>
                            {{ $partsBackup->quantity_price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.minimum_lot_charge') }}
                        </th>
                        <td>
                            {{ $partsBackup->minimum_lot_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.minimum_line_charge') }}
                        </th>
                        <td>
                            {{ $partsBackup->minimum_line_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quote') }}
                        </th>
                        <td>
                            {{ $partsBackup->quote }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.certify') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partsBackup->certify ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.specification') }}
                        </th>
                        <td>
                            {{ $partsBackup->specification }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.bake') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partsBackup->bake ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.baking_time_pre') }}
                        </th>
                        <td>
                            {{ $partsBackup->baking_time_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.baking_temp_pre') }}
                        </th>
                        <td>
                            {{ $partsBackup->baking_temp_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.baking_time_post') }}
                        </th>
                        <td>
                            {{ $partsBackup->baking_time_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.baking_temp_post') }}
                        </th>
                        <td>
                            {{ $partsBackup->baking_temp_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.procedure_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->procedure_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.material') }}
                        </th>
                        <td>
                            {{ $partsBackup->material }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.material_name') }}
                        </th>
                        <td>
                            {{ $partsBackup->material_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.material_condition') }}
                        </th>
                        <td>
                            {{ $partsBackup->material_condition }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.thickness_minimum') }}
                        </th>
                        <td>
                            {{ $partsBackup->thickness_minimum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.thickness_maximum') }}
                        </th>
                        <td>
                            {{ $partsBackup->thickness_maximum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.thickness_unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->thickness_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.surface_area') }}
                        </th>
                        <td>
                            {{ $partsBackup->surface_area }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.surface_area_unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->surface_area_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.weight') }}
                        </th>
                        <td>
                            {{ $partsBackup->weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.weight_unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->weight_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.length') }}
                        </th>
                        <td>
                            {{ $partsBackup->length }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.width') }}
                        </th>
                        <td>
                            {{ $partsBackup->width }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.height') }}
                        </th>
                        <td>
                            {{ $partsBackup->height }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.dimension_unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->dimension_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.material_thickness') }}
                        </th>
                        <td>
                            {{ $partsBackup->material_thickness }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.material_thickness_unit_code') }}
                        </th>
                        <td>
                            {{ $partsBackup->material_thickness_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.note') }}
                        </th>
                        <td>
                            {{ $partsBackup->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.special_requirement') }}
                        </th>
                        <td>
                            {{ $partsBackup->special_requirement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.operator_note') }}
                        </th>
                        <td>
                            {{ $partsBackup->operator_note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_1') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_2') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_3') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_4') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_5') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.quality_check_6') }}
                        </th>
                        <td>
                            {{ $partsBackup->quality_check_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.image_count') }}
                        </th>
                        <td>
                            {{ $partsBackup->image_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.session') }}
                        </th>
                        <td>
                            {{ $partsBackup->session }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partsBackup->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partsBackup.fields.revision') }}
                        </th>
                        <td>
                            {{ $partsBackup->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.parts-backups.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection