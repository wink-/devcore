@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.part.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.parts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.id') }}
                        </th>
                        <td>
                            {{ $part->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.number') }}
                        </th>
                        <td>
                            {{ $part->number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.revision_code') }}
                        </th>
                        <td>
                            {{ $part->revision_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.description') }}
                        </th>
                        <td>
                            {{ $part->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $part->customer_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $part->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.process_code') }}
                        </th>
                        <td>
                            {{ $part->process_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.method_code') }}
                        </th>
                        <td>
                            {{ $part->method_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.price') }}
                        </th>
                        <td>
                            {{ $part->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.price_code') }}
                        </th>
                        <td>
                            {{ $part->price_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.price_break') }}
                        </th>
                        <td>
                            {{ $part->price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.quantity_price_break') }}
                        </th>
                        <td>
                            {{ $part->quantity_price_break }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.unit_code') }}
                        </th>
                        <td>
                            {{ $part->unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.minimum_lot_charge') }}
                        </th>
                        <td>
                            {{ $part->minimum_lot_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.minimum_line_charge') }}
                        </th>
                        <td>
                            {{ $part->minimum_line_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.quote') }}
                        </th>
                        <td>
                            {{ $part->quote }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.certify') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $part->certify ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.specification') }}
                        </th>
                        <td>
                            {{ $part->specification }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.bake') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $part->bake ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.baking_time_pre') }}
                        </th>
                        <td>
                            {{ $part->baking_time_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.baking_temp_pre') }}
                        </th>
                        <td>
                            {{ $part->baking_temp_pre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.baking_time_post') }}
                        </th>
                        <td>
                            {{ $part->baking_time_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.baking_temp_post') }}
                        </th>
                        <td>
                            {{ $part->baking_temp_post }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.procedure_code') }}
                        </th>
                        <td>
                            {{ $part->procedure_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.material') }}
                        </th>
                        <td>
                            {{ $part->material }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.material_name') }}
                        </th>
                        <td>
                            {{ $part->material_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.material_condition') }}
                        </th>
                        <td>
                            {{ $part->material_condition }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.thickness_minimum') }}
                        </th>
                        <td>
                            {{ $part->thickness_minimum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.thickness_maximum') }}
                        </th>
                        <td>
                            {{ $part->thickness_maximum }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.thickness_unit_code') }}
                        </th>
                        <td>
                            {{ $part->thickness_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.surface_area') }}
                        </th>
                        <td>
                            {{ $part->surface_area }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.surface_area_unit_code') }}
                        </th>
                        <td>
                            {{ $part->surface_area_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.weight') }}
                        </th>
                        <td>
                            {{ $part->weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.weight_unit_code') }}
                        </th>
                        <td>
                            {{ $part->weight_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.length') }}
                        </th>
                        <td>
                            {{ $part->length }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.width') }}
                        </th>
                        <td>
                            {{ $part->width }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.height') }}
                        </th>
                        <td>
                            {{ $part->height }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.dimension_unit_code') }}
                        </th>
                        <td>
                            {{ $part->dimension_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.material_thickness') }}
                        </th>
                        <td>
                            {{ $part->material_thickness }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.material_thickness_unit_code') }}
                        </th>
                        <td>
                            {{ $part->material_thickness_unit_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.note') }}
                        </th>
                        <td>
                            {{ $part->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.special_requirement') }}
                        </th>
                        <td>
                            {{ $part->special_requirement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.operator_note') }}
                        </th>
                        <td>
                            {{ $part->operator_note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.quality_check_1') }}
                        </th>
                        <td>
                            {{ $part->quality_check_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.quality_check_2') }}
                        </th>
                        <td>
                            {{ $part->quality_check_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.quality_check_3') }}
                        </th>
                        <td>
                            {{ $part->quality_check_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.quality_check_4') }}
                        </th>
                        <td>
                            {{ $part->quality_check_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.quality_check_5') }}
                        </th>
                        <td>
                            {{ $part->quality_check_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.quality_check_6') }}
                        </th>
                        <td>
                            {{ $part->quality_check_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.image_count') }}
                        </th>
                        <td>
                            {{ $part->image_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.session') }}
                        </th>
                        <td>
                            {{ $part->session }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $part->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.part.fields.revision') }}
                        </th>
                        <td>
                            {{ $part->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.parts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#part_workorders" role="tab" data-toggle="tab">
                {{ trans('cruds.workorder.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#part_workorderhistories" role="tab" data-toggle="tab">
                {{ trans('cruds.workorderhistory.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="part_workorders">
            @includeIf('admin.parts.relationships.partWorkorders', ['workorders' => $part->partWorkorders])
        </div>
        <div class="tab-pane" role="tabpanel" id="part_workorderhistories">
            @includeIf('admin.parts.relationships.partWorkorderhistories', ['workorderhistories' => $part->partWorkorderhistories])
        </div>
    </div>
</div>

@endsection