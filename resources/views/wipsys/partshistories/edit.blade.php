@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit {{ trans('cruds.partshistory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("wipsys.partshistories.update", [$partshistory->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="number">{{ trans('cruds.partshistory.fields.number') }}</label>
                <input class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" type="text" name="number" id="number" value="{{ old('number', $partshistory->number) }}">
                @if($errors->has('number'))
                    <span class="text-danger">{{ $errors->first('number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.partshistory.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $partshistory->description) }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_code">{{ trans('cruds.partshistory.fields.customer_code') }}</label>
                <input class="form-control {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" type="text" name="customer_code" id="customer_code" value="{{ old('customer_code', $partshistory->customer_code) }}">
                @if($errors->has('customer_code'))
                    <span class="text-danger">{{ $errors->first('customer_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_name">{{ trans('cruds.partshistory.fields.customer_name') }}</label>
                <input class="form-control {{ $errors->has('customer_name') ? 'is-invalid' : '' }}" type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', $partshistory->customer_name) }}">
                @if($errors->has('customer_name'))
                    <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.customer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="process_code">{{ trans('cruds.partshistory.fields.process_code') }}</label>
                <input class="form-control {{ $errors->has('process_code') ? 'is-invalid' : '' }}" type="text" name="process_code" id="process_code" value="{{ old('process_code', $partshistory->process_code) }}">
                @if($errors->has('process_code'))
                    <span class="text-danger">{{ $errors->first('process_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.process_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="method_code">{{ trans('cruds.partshistory.fields.method_code') }}</label>
                <input class="form-control {{ $errors->has('method_code') ? 'is-invalid' : '' }}" type="text" name="method_code" id="method_code" value="{{ old('method_code', $partshistory->method_code) }}">
                @if($errors->has('method_code'))
                    <span class="text-danger">{{ $errors->first('method_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.method_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.partshistory.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $partshistory->price) }}" step="0.01">
                @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_code">{{ trans('cruds.partshistory.fields.price_code') }}</label>
                <input class="form-control {{ $errors->has('price_code') ? 'is-invalid' : '' }}" type="text" name="price_code" id="price_code" value="{{ old('price_code', $partshistory->price_code) }}">
                @if($errors->has('price_code'))
                    <span class="text-danger">{{ $errors->first('price_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.price_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_break">{{ trans('cruds.partshistory.fields.price_break') }}</label>
                <input class="form-control {{ $errors->has('price_break') ? 'is-invalid' : '' }}" type="number" name="price_break" id="price_break" value="{{ old('price_break', $partshistory->price_break) }}" step="0.01">
                @if($errors->has('price_break'))
                    <span class="text-danger">{{ $errors->first('price_break') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.price_break_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity_price_break">{{ trans('cruds.partshistory.fields.quantity_price_break') }}</label>
                <input class="form-control {{ $errors->has('quantity_price_break') ? 'is-invalid' : '' }}" type="text" name="quantity_price_break" id="quantity_price_break" value="{{ old('quantity_price_break', $partshistory->quantity_price_break) }}">
                @if($errors->has('quantity_price_break'))
                    <span class="text-danger">{{ $errors->first('quantity_price_break') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quantity_price_break_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_code">{{ trans('cruds.partshistory.fields.unit_code') }}</label>
                <input class="form-control {{ $errors->has('unit_code') ? 'is-invalid' : '' }}" type="text" name="unit_code" id="unit_code" value="{{ old('unit_code', $partshistory->unit_code) }}">
                @if($errors->has('unit_code'))
                    <span class="text-danger">{{ $errors->first('unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="minimum_lot_charge">{{ trans('cruds.partshistory.fields.minimum_lot_charge') }}</label>
                <input class="form-control {{ $errors->has('minimum_lot_charge') ? 'is-invalid' : '' }}" type="number" name="minimum_lot_charge" id="minimum_lot_charge" value="{{ old('minimum_lot_charge', $partshistory->minimum_lot_charge) }}" step="0.01">
                @if($errors->has('minimum_lot_charge'))
                    <span class="text-danger">{{ $errors->first('minimum_lot_charge') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.minimum_lot_charge_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="minimum_line_charge">{{ trans('cruds.partshistory.fields.minimum_line_charge') }}</label>
                <input class="form-control {{ $errors->has('minimum_line_charge') ? 'is-invalid' : '' }}" type="number" name="minimum_line_charge" id="minimum_line_charge" value="{{ old('minimum_line_charge', $partshistory->minimum_line_charge) }}" step="0.01">
                @if($errors->has('minimum_line_charge'))
                    <span class="text-danger">{{ $errors->first('minimum_line_charge') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.minimum_line_charge_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quote">{{ trans('cruds.partshistory.fields.quote') }}</label>
                <input class="form-control {{ $errors->has('quote') ? 'is-invalid' : '' }}" type="number" name="quote" id="quote" value="{{ old('quote', $partshistory->quote) }}" step="1">
                @if($errors->has('quote'))
                    <span class="text-danger">{{ $errors->first('quote') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quote_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('certify') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="certify" value="0">
                    <input class="form-check-input" type="checkbox" name="certify" id="certify" value="1" {{ $partshistory->certify || old('certify', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="certify">{{ trans('cruds.partshistory.fields.certify') }}</label>
                </div>
                @if($errors->has('certify'))
                    <span class="text-danger">{{ $errors->first('certify') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.certify_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="specification">{{ trans('cruds.partshistory.fields.specification') }}</label>
                <input class="form-control {{ $errors->has('specification') ? 'is-invalid' : '' }}" type="text" name="specification" id="specification" value="{{ old('specification', $partshistory->specification) }}">
                @if($errors->has('specification'))
                    <span class="text-danger">{{ $errors->first('specification') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.specification_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('bake') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="bake" value="0">
                    <input class="form-check-input" type="checkbox" name="bake" id="bake" value="1" {{ $partshistory->bake || old('bake', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="bake">{{ trans('cruds.partshistory.fields.bake') }}</label>
                </div>
                @if($errors->has('bake'))
                    <span class="text-danger">{{ $errors->first('bake') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.bake_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_time_pre">{{ trans('cruds.partshistory.fields.baking_time_pre') }}</label>
                <input class="form-control {{ $errors->has('baking_time_pre') ? 'is-invalid' : '' }}" type="text" name="baking_time_pre" id="baking_time_pre" value="{{ old('baking_time_pre', $partshistory->baking_time_pre) }}">
                @if($errors->has('baking_time_pre'))
                    <span class="text-danger">{{ $errors->first('baking_time_pre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.baking_time_pre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_temp_pre">{{ trans('cruds.partshistory.fields.baking_temp_pre') }}</label>
                <input class="form-control {{ $errors->has('baking_temp_pre') ? 'is-invalid' : '' }}" type="text" name="baking_temp_pre" id="baking_temp_pre" value="{{ old('baking_temp_pre', $partshistory->baking_temp_pre) }}">
                @if($errors->has('baking_temp_pre'))
                    <span class="text-danger">{{ $errors->first('baking_temp_pre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.baking_temp_pre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_time_post">{{ trans('cruds.partshistory.fields.baking_time_post') }}</label>
                <input class="form-control {{ $errors->has('baking_time_post') ? 'is-invalid' : '' }}" type="text" name="baking_time_post" id="baking_time_post" value="{{ old('baking_time_post', $partshistory->baking_time_post) }}">
                @if($errors->has('baking_time_post'))
                    <span class="text-danger">{{ $errors->first('baking_time_post') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.baking_time_post_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_temp_post">{{ trans('cruds.partshistory.fields.baking_temp_post') }}</label>
                <input class="form-control {{ $errors->has('baking_temp_post') ? 'is-invalid' : '' }}" type="text" name="baking_temp_post" id="baking_temp_post" value="{{ old('baking_temp_post', $partshistory->baking_temp_post) }}">
                @if($errors->has('baking_temp_post'))
                    <span class="text-danger">{{ $errors->first('baking_temp_post') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.baking_temp_post_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="procedure_code">{{ trans('cruds.partshistory.fields.procedure_code') }}</label>
                <input class="form-control {{ $errors->has('procedure_code') ? 'is-invalid' : '' }}" type="text" name="procedure_code" id="procedure_code" value="{{ old('procedure_code', $partshistory->procedure_code) }}">
                @if($errors->has('procedure_code'))
                    <span class="text-danger">{{ $errors->first('procedure_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.procedure_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material">{{ trans('cruds.partshistory.fields.material') }}</label>
                <input class="form-control {{ $errors->has('material') ? 'is-invalid' : '' }}" type="text" name="material" id="material" value="{{ old('material', $partshistory->material) }}">
                @if($errors->has('material'))
                    <span class="text-danger">{{ $errors->first('material') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.material_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_name">{{ trans('cruds.partshistory.fields.material_name') }}</label>
                <input class="form-control {{ $errors->has('material_name') ? 'is-invalid' : '' }}" type="text" name="material_name" id="material_name" value="{{ old('material_name', $partshistory->material_name) }}">
                @if($errors->has('material_name'))
                    <span class="text-danger">{{ $errors->first('material_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.material_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_condition">{{ trans('cruds.partshistory.fields.material_condition') }}</label>
                <input class="form-control {{ $errors->has('material_condition') ? 'is-invalid' : '' }}" type="text" name="material_condition" id="material_condition" value="{{ old('material_condition', $partshistory->material_condition) }}">
                @if($errors->has('material_condition'))
                    <span class="text-danger">{{ $errors->first('material_condition') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.material_condition_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_minimum">{{ trans('cruds.partshistory.fields.thickness_minimum') }}</label>
                <input class="form-control {{ $errors->has('thickness_minimum') ? 'is-invalid' : '' }}" type="number" name="thickness_minimum" id="thickness_minimum" value="{{ old('thickness_minimum', $partshistory->thickness_minimum) }}" step="0.000001">
                @if($errors->has('thickness_minimum'))
                    <span class="text-danger">{{ $errors->first('thickness_minimum') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.thickness_minimum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_maximum">{{ trans('cruds.partshistory.fields.thickness_maximum') }}</label>
                <input class="form-control {{ $errors->has('thickness_maximum') ? 'is-invalid' : '' }}" type="number" name="thickness_maximum" id="thickness_maximum" value="{{ old('thickness_maximum', $partshistory->thickness_maximum) }}" step="0.000001">
                @if($errors->has('thickness_maximum'))
                    <span class="text-danger">{{ $errors->first('thickness_maximum') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.thickness_maximum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_unit_code">{{ trans('cruds.partshistory.fields.thickness_unit_code') }}</label>
                <input class="form-control {{ $errors->has('thickness_unit_code') ? 'is-invalid' : '' }}" type="text" name="thickness_unit_code" id="thickness_unit_code" value="{{ old('thickness_unit_code', $partshistory->thickness_unit_code) }}">
                @if($errors->has('thickness_unit_code'))
                    <span class="text-danger">{{ $errors->first('thickness_unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.thickness_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="surface_area">{{ trans('cruds.partshistory.fields.surface_area') }}</label>
                <input class="form-control {{ $errors->has('surface_area') ? 'is-invalid' : '' }}" type="number" name="surface_area" id="surface_area" value="{{ old('surface_area', $partshistory->surface_area) }}" step="0.01">
                @if($errors->has('surface_area'))
                    <span class="text-danger">{{ $errors->first('surface_area') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.surface_area_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="surface_area_unit_code">{{ trans('cruds.partshistory.fields.surface_area_unit_code') }}</label>
                <input class="form-control {{ $errors->has('surface_area_unit_code') ? 'is-invalid' : '' }}" type="text" name="surface_area_unit_code" id="surface_area_unit_code" value="{{ old('surface_area_unit_code', $partshistory->surface_area_unit_code) }}">
                @if($errors->has('surface_area_unit_code'))
                    <span class="text-danger">{{ $errors->first('surface_area_unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.surface_area_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="weight">{{ trans('cruds.partshistory.fields.weight') }}</label>
                <input class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" type="number" name="weight" id="weight" value="{{ old('weight', $partshistory->weight) }}" step="0.01">
                @if($errors->has('weight'))
                    <span class="text-danger">{{ $errors->first('weight') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="weight_unit_code">{{ trans('cruds.partshistory.fields.weight_unit_code') }}</label>
                <input class="form-control {{ $errors->has('weight_unit_code') ? 'is-invalid' : '' }}" type="text" name="weight_unit_code" id="weight_unit_code" value="{{ old('weight_unit_code', $partshistory->weight_unit_code) }}">
                @if($errors->has('weight_unit_code'))
                    <span class="text-danger">{{ $errors->first('weight_unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.weight_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="length">{{ trans('cruds.partshistory.fields.length') }}</label>
                <input class="form-control {{ $errors->has('length') ? 'is-invalid' : '' }}" type="number" name="length" id="length" value="{{ old('length', $partshistory->length) }}" step="0.01">
                @if($errors->has('length'))
                    <span class="text-danger">{{ $errors->first('length') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.length_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="width">{{ trans('cruds.partshistory.fields.width') }}</label>
                <input class="form-control {{ $errors->has('width') ? 'is-invalid' : '' }}" type="number" name="width" id="width" value="{{ old('width', $partshistory->width) }}" step="0.01">
                @if($errors->has('width'))
                    <span class="text-danger">{{ $errors->first('width') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.width_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="height">{{ trans('cruds.partshistory.fields.height') }}</label>
                <input class="form-control {{ $errors->has('height') ? 'is-invalid' : '' }}" type="number" name="height" id="height" value="{{ old('height', $partshistory->height) }}" step="0.01">
                @if($errors->has('height'))
                    <span class="text-danger">{{ $errors->first('height') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.height_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dimension_unit_code">{{ trans('cruds.partshistory.fields.dimension_unit_code') }}</label>
                <input class="form-control {{ $errors->has('dimension_unit_code') ? 'is-invalid' : '' }}" type="text" name="dimension_unit_code" id="dimension_unit_code" value="{{ old('dimension_unit_code', $partshistory->dimension_unit_code) }}">
                @if($errors->has('dimension_unit_code'))
                    <span class="text-danger">{{ $errors->first('dimension_unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.dimension_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_thickness">{{ trans('cruds.partshistory.fields.material_thickness') }}</label>
                <input class="form-control {{ $errors->has('material_thickness') ? 'is-invalid' : '' }}" type="number" name="material_thickness" id="material_thickness" value="{{ old('material_thickness', $partshistory->material_thickness) }}" step="0.0001">
                @if($errors->has('material_thickness'))
                    <span class="text-danger">{{ $errors->first('material_thickness') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.material_thickness_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_thickness_unit_code">{{ trans('cruds.partshistory.fields.material_thickness_unit_code') }}</label>
                <input class="form-control {{ $errors->has('material_thickness_unit_code') ? 'is-invalid' : '' }}" type="text" name="material_thickness_unit_code" id="material_thickness_unit_code" value="{{ old('material_thickness_unit_code', $partshistory->material_thickness_unit_code) }}">
                @if($errors->has('material_thickness_unit_code'))
                    <span class="text-danger">{{ $errors->first('material_thickness_unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.material_thickness_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.partshistory.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $partshistory->note) }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="special_requirement">{{ trans('cruds.partshistory.fields.special_requirement') }}</label>
                <textarea class="form-control {{ $errors->has('special_requirement') ? 'is-invalid' : '' }}" name="special_requirement" id="special_requirement">{{ old('special_requirement', $partshistory->special_requirement) }}</textarea>
                @if($errors->has('special_requirement'))
                    <span class="text-danger">{{ $errors->first('special_requirement') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.special_requirement_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="operator_note">{{ trans('cruds.partshistory.fields.operator_note') }}</label>
                <textarea class="form-control {{ $errors->has('operator_note') ? 'is-invalid' : '' }}" name="operator_note" id="operator_note">{{ old('operator_note', $partshistory->operator_note) }}</textarea>
                @if($errors->has('operator_note'))
                    <span class="text-danger">{{ $errors->first('operator_note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.operator_note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_1">{{ trans('cruds.partshistory.fields.quality_check_1') }}</label>
                <input class="form-control {{ $errors->has('quality_check_1') ? 'is-invalid' : '' }}" type="number" name="quality_check_1" id="quality_check_1" value="{{ old('quality_check_1', $partshistory->quality_check_1) }}" step="1">
                @if($errors->has('quality_check_1'))
                    <span class="text-danger">{{ $errors->first('quality_check_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_2">{{ trans('cruds.partshistory.fields.quality_check_2') }}</label>
                <input class="form-control {{ $errors->has('quality_check_2') ? 'is-invalid' : '' }}" type="number" name="quality_check_2" id="quality_check_2" value="{{ old('quality_check_2', $partshistory->quality_check_2) }}" step="1">
                @if($errors->has('quality_check_2'))
                    <span class="text-danger">{{ $errors->first('quality_check_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_3">{{ trans('cruds.partshistory.fields.quality_check_3') }}</label>
                <input class="form-control {{ $errors->has('quality_check_3') ? 'is-invalid' : '' }}" type="number" name="quality_check_3" id="quality_check_3" value="{{ old('quality_check_3', $partshistory->quality_check_3) }}" step="1">
                @if($errors->has('quality_check_3'))
                    <span class="text-danger">{{ $errors->first('quality_check_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_4">{{ trans('cruds.partshistory.fields.quality_check_4') }}</label>
                <input class="form-control {{ $errors->has('quality_check_4') ? 'is-invalid' : '' }}" type="number" name="quality_check_4" id="quality_check_4" value="{{ old('quality_check_4', $partshistory->quality_check_4) }}" step="1">
                @if($errors->has('quality_check_4'))
                    <span class="text-danger">{{ $errors->first('quality_check_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_5">{{ trans('cruds.partshistory.fields.quality_check_5') }}</label>
                <input class="form-control {{ $errors->has('quality_check_5') ? 'is-invalid' : '' }}" type="number" name="quality_check_5" id="quality_check_5" value="{{ old('quality_check_5', $partshistory->quality_check_5) }}" step="1">
                @if($errors->has('quality_check_5'))
                    <span class="text-danger">{{ $errors->first('quality_check_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_6">{{ trans('cruds.partshistory.fields.quality_check_6') }}</label>
                <input class="form-control {{ $errors->has('quality_check_6') ? 'is-invalid' : '' }}" type="number" name="quality_check_6" id="quality_check_6" value="{{ old('quality_check_6', $partshistory->quality_check_6) }}" step="1">
                @if($errors->has('quality_check_6'))
                    <span class="text-danger">{{ $errors->first('quality_check_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image_count">{{ trans('cruds.partshistory.fields.image_count') }}</label>
                <input class="form-control {{ $errors->has('image_count') ? 'is-invalid' : '' }}" type="number" name="image_count" id="image_count" value="{{ old('image_count', $partshistory->image_count) }}" step="1">
                @if($errors->has('image_count'))
                    <span class="text-danger">{{ $errors->first('image_count') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.image_count_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="session">{{ trans('cruds.partshistory.fields.session') }}</label>
                <input class="form-control {{ $errors->has('session') ? 'is-invalid' : '' }}" type="text" name="session" id="session" value="{{ old('session', $partshistory->session) }}">
                @if($errors->has('session'))
                    <span class="text-danger">{{ $errors->first('session') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.session_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $partshistory->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.partshistory.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.partshistory.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $partshistory->revision) }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.revision_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="number">{{ trans('cruds.partshistory.fields.number') }}</label>
                <input class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" type="text" name="number" id="number" value="{{ old('number', $partshistory->number) }}">
                @if($errors->has('number'))
                    <span class="text-danger">{{ $errors->first('number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.partshistory.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $partshistory->description) }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_code">{{ trans('cruds.partshistory.fields.customer_code') }}</label>
                <input class="form-control {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" type="text" name="customer_code" id="customer_code" value="{{ old('customer_code', $partshistory->customer_code) }}">
                @if($errors->has('customer_code'))
                    <span class="text-danger">{{ $errors->first('customer_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_name">{{ trans('cruds.partshistory.fields.customer_name') }}</label>
                <input class="form-control {{ $errors->has('customer_name') ? 'is-invalid' : '' }}" type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', $partshistory->customer_name) }}">
                @if($errors->has('customer_name'))
                    <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.customer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="process_code">{{ trans('cruds.partshistory.fields.process_code') }}</label>
                <input class="form-control {{ $errors->has('process_code') ? 'is-invalid' : '' }}" type="text" name="process_code" id="process_code" value="{{ old('process_code', $partshistory->process_code) }}">
                @if($errors->has('process_code'))
                    <span class="text-danger">{{ $errors->first('process_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.process_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="method_code">{{ trans('cruds.partshistory.fields.method_code') }}</label>
                <input class="form-control {{ $errors->has('method_code') ? 'is-invalid' : '' }}" type="text" name="method_code" id="method_code" value="{{ old('method_code', $partshistory->method_code) }}">
                @if($errors->has('method_code'))
                    <span class="text-danger">{{ $errors->first('method_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.method_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.partshistory.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $partshistory->price) }}" step="0.01">
                @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_code">{{ trans('cruds.partshistory.fields.price_code') }}</label>
                <input class="form-control {{ $errors->has('price_code') ? 'is-invalid' : '' }}" type="text" name="price_code" id="price_code" value="{{ old('price_code', $partshistory->price_code) }}">
                @if($errors->has('price_code'))
                    <span class="text-danger">{{ $errors->first('price_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.price_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_break">{{ trans('cruds.partshistory.fields.price_break') }}</label>
                <input class="form-control {{ $errors->has('price_break') ? 'is-invalid' : '' }}" type="number" name="price_break" id="price_break" value="{{ old('price_break', $partshistory->price_break) }}" step="0.01">
                @if($errors->has('price_break'))
                    <span class="text-danger">{{ $errors->first('price_break') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.price_break_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity_price_break">{{ trans('cruds.partshistory.fields.quantity_price_break') }}</label>
                <input class="form-control {{ $errors->has('quantity_price_break') ? 'is-invalid' : '' }}" type="text" name="quantity_price_break" id="quantity_price_break" value="{{ old('quantity_price_break', $partshistory->quantity_price_break) }}">
                @if($errors->has('quantity_price_break'))
                    <span class="text-danger">{{ $errors->first('quantity_price_break') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quantity_price_break_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_code">{{ trans('cruds.partshistory.fields.unit_code') }}</label>
                <input class="form-control {{ $errors->has('unit_code') ? 'is-invalid' : '' }}" type="text" name="unit_code" id="unit_code" value="{{ old('unit_code', $partshistory->unit_code) }}">
                @if($errors->has('unit_code'))
                    <span class="text-danger">{{ $errors->first('unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="minimum_lot_charge">{{ trans('cruds.partshistory.fields.minimum_lot_charge') }}</label>
                <input class="form-control {{ $errors->has('minimum_lot_charge') ? 'is-invalid' : '' }}" type="number" name="minimum_lot_charge" id="minimum_lot_charge" value="{{ old('minimum_lot_charge', $partshistory->minimum_lot_charge) }}" step="0.01">
                @if($errors->has('minimum_lot_charge'))
                    <span class="text-danger">{{ $errors->first('minimum_lot_charge') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.minimum_lot_charge_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="minimum_line_charge">{{ trans('cruds.partshistory.fields.minimum_line_charge') }}</label>
                <input class="form-control {{ $errors->has('minimum_line_charge') ? 'is-invalid' : '' }}" type="number" name="minimum_line_charge" id="minimum_line_charge" value="{{ old('minimum_line_charge', $partshistory->minimum_line_charge) }}" step="0.01">
                @if($errors->has('minimum_line_charge'))
                    <span class="text-danger">{{ $errors->first('minimum_line_charge') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.minimum_line_charge_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quote">{{ trans('cruds.partshistory.fields.quote') }}</label>
                <input class="form-control {{ $errors->has('quote') ? 'is-invalid' : '' }}" type="number" name="quote" id="quote" value="{{ old('quote', $partshistory->quote) }}" step="1">
                @if($errors->has('quote'))
                    <span class="text-danger">{{ $errors->first('quote') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quote_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('certify') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="certify" value="0">
                    <input class="form-check-input" type="checkbox" name="certify" id="certify" value="1" {{ $partshistory->certify || old('certify', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="certify">{{ trans('cruds.partshistory.fields.certify') }}</label>
                </div>
                @if($errors->has('certify'))
                    <span class="text-danger">{{ $errors->first('certify') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.certify_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="specification">{{ trans('cruds.partshistory.fields.specification') }}</label>
                <input class="form-control {{ $errors->has('specification') ? 'is-invalid' : '' }}" type="text" name="specification" id="specification" value="{{ old('specification', $partshistory->specification) }}">
                @if($errors->has('specification'))
                    <span class="text-danger">{{ $errors->first('specification') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.specification_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('bake') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="bake" value="0">
                    <input class="form-check-input" type="checkbox" name="bake" id="bake" value="1" {{ $partshistory->bake || old('bake', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="bake">{{ trans('cruds.partshistory.fields.bake') }}</label>
                </div>
                @if($errors->has('bake'))
                    <span class="text-danger">{{ $errors->first('bake') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.bake_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_time_pre">{{ trans('cruds.partshistory.fields.baking_time_pre') }}</label>
                <input class="form-control {{ $errors->has('baking_time_pre') ? 'is-invalid' : '' }}" type="text" name="baking_time_pre" id="baking_time_pre" value="{{ old('baking_time_pre', $partshistory->baking_time_pre) }}">
                @if($errors->has('baking_time_pre'))
                    <span class="text-danger">{{ $errors->first('baking_time_pre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.baking_time_pre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_temp_pre">{{ trans('cruds.partshistory.fields.baking_temp_pre') }}</label>
                <input class="form-control {{ $errors->has('baking_temp_pre') ? 'is-invalid' : '' }}" type="text" name="baking_temp_pre" id="baking_temp_pre" value="{{ old('baking_temp_pre', $partshistory->baking_temp_pre) }}">
                @if($errors->has('baking_temp_pre'))
                    <span class="text-danger">{{ $errors->first('baking_temp_pre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.baking_temp_pre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_time_post">{{ trans('cruds.partshistory.fields.baking_time_post') }}</label>
                <input class="form-control {{ $errors->has('baking_time_post') ? 'is-invalid' : '' }}" type="text" name="baking_time_post" id="baking_time_post" value="{{ old('baking_time_post', $partshistory->baking_time_post) }}">
                @if($errors->has('baking_time_post'))
                    <span class="text-danger">{{ $errors->first('baking_time_post') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.baking_time_post_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_temp_post">{{ trans('cruds.partshistory.fields.baking_temp_post') }}</label>
                <input class="form-control {{ $errors->has('baking_temp_post') ? 'is-invalid' : '' }}" type="text" name="baking_temp_post" id="baking_temp_post" value="{{ old('baking_temp_post', $partshistory->baking_temp_post) }}">
                @if($errors->has('baking_temp_post'))
                    <span class="text-danger">{{ $errors->first('baking_temp_post') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.baking_temp_post_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="procedure_code">{{ trans('cruds.partshistory.fields.procedure_code') }}</label>
                <input class="form-control {{ $errors->has('procedure_code') ? 'is-invalid' : '' }}" type="text" name="procedure_code" id="procedure_code" value="{{ old('procedure_code', $partshistory->procedure_code) }}">
                @if($errors->has('procedure_code'))
                    <span class="text-danger">{{ $errors->first('procedure_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.procedure_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material">{{ trans('cruds.partshistory.fields.material') }}</label>
                <input class="form-control {{ $errors->has('material') ? 'is-invalid' : '' }}" type="text" name="material" id="material" value="{{ old('material', $partshistory->material) }}">
                @if($errors->has('material'))
                    <span class="text-danger">{{ $errors->first('material') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.material_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_name">{{ trans('cruds.partshistory.fields.material_name') }}</label>
                <input class="form-control {{ $errors->has('material_name') ? 'is-invalid' : '' }}" type="text" name="material_name" id="material_name" value="{{ old('material_name', $partshistory->material_name) }}">
                @if($errors->has('material_name'))
                    <span class="text-danger">{{ $errors->first('material_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.material_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_condition">{{ trans('cruds.partshistory.fields.material_condition') }}</label>
                <input class="form-control {{ $errors->has('material_condition') ? 'is-invalid' : '' }}" type="text" name="material_condition" id="material_condition" value="{{ old('material_condition', $partshistory->material_condition) }}">
                @if($errors->has('material_condition'))
                    <span class="text-danger">{{ $errors->first('material_condition') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.material_condition_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_minimum">{{ trans('cruds.partshistory.fields.thickness_minimum') }}</label>
                <input class="form-control {{ $errors->has('thickness_minimum') ? 'is-invalid' : '' }}" type="number" name="thickness_minimum" id="thickness_minimum" value="{{ old('thickness_minimum', $partshistory->thickness_minimum) }}" step="0.000001">
                @if($errors->has('thickness_minimum'))
                    <span class="text-danger">{{ $errors->first('thickness_minimum') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.thickness_minimum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_maximum">{{ trans('cruds.partshistory.fields.thickness_maximum') }}</label>
                <input class="form-control {{ $errors->has('thickness_maximum') ? 'is-invalid' : '' }}" type="number" name="thickness_maximum" id="thickness_maximum" value="{{ old('thickness_maximum', $partshistory->thickness_maximum) }}" step="0.000001">
                @if($errors->has('thickness_maximum'))
                    <span class="text-danger">{{ $errors->first('thickness_maximum') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.thickness_maximum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_unit_code">{{ trans('cruds.partshistory.fields.thickness_unit_code') }}</label>
                <input class="form-control {{ $errors->has('thickness_unit_code') ? 'is-invalid' : '' }}" type="text" name="thickness_unit_code" id="thickness_unit_code" value="{{ old('thickness_unit_code', $partshistory->thickness_unit_code) }}">
                @if($errors->has('thickness_unit_code'))
                    <span class="text-danger">{{ $errors->first('thickness_unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.thickness_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="surface_area">{{ trans('cruds.partshistory.fields.surface_area') }}</label>
                <input class="form-control {{ $errors->has('surface_area') ? 'is-invalid' : '' }}" type="number" name="surface_area" id="surface_area" value="{{ old('surface_area', $partshistory->surface_area) }}" step="0.01">
                @if($errors->has('surface_area'))
                    <span class="text-danger">{{ $errors->first('surface_area') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.surface_area_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="surface_area_unit_code">{{ trans('cruds.partshistory.fields.surface_area_unit_code') }}</label>
                <input class="form-control {{ $errors->has('surface_area_unit_code') ? 'is-invalid' : '' }}" type="text" name="surface_area_unit_code" id="surface_area_unit_code" value="{{ old('surface_area_unit_code', $partshistory->surface_area_unit_code) }}">
                @if($errors->has('surface_area_unit_code'))
                    <span class="text-danger">{{ $errors->first('surface_area_unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.surface_area_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="weight">{{ trans('cruds.partshistory.fields.weight') }}</label>
                <input class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" type="number" name="weight" id="weight" value="{{ old('weight', $partshistory->weight) }}" step="0.01">
                @if($errors->has('weight'))
                    <span class="text-danger">{{ $errors->first('weight') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="weight_unit_code">{{ trans('cruds.partshistory.fields.weight_unit_code') }}</label>
                <input class="form-control {{ $errors->has('weight_unit_code') ? 'is-invalid' : '' }}" type="text" name="weight_unit_code" id="weight_unit_code" value="{{ old('weight_unit_code', $partshistory->weight_unit_code) }}">
                @if($errors->has('weight_unit_code'))
                    <span class="text-danger">{{ $errors->first('weight_unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.weight_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="length">{{ trans('cruds.partshistory.fields.length') }}</label>
                <input class="form-control {{ $errors->has('length') ? 'is-invalid' : '' }}" type="number" name="length" id="length" value="{{ old('length', $partshistory->length) }}" step="0.01">
                @if($errors->has('length'))
                    <span class="text-danger">{{ $errors->first('length') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.length_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="width">{{ trans('cruds.partshistory.fields.width') }}</label>
                <input class="form-control {{ $errors->has('width') ? 'is-invalid' : '' }}" type="number" name="width" id="width" value="{{ old('width', $partshistory->width) }}" step="0.01">
                @if($errors->has('width'))
                    <span class="text-danger">{{ $errors->first('width') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.width_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="height">{{ trans('cruds.partshistory.fields.height') }}</label>
                <input class="form-control {{ $errors->has('height') ? 'is-invalid' : '' }}" type="number" name="height" id="height" value="{{ old('height', $partshistory->height) }}" step="0.01">
                @if($errors->has('height'))
                    <span class="text-danger">{{ $errors->first('height') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.height_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dimension_unit_code">{{ trans('cruds.partshistory.fields.dimension_unit_code') }}</label>
                <input class="form-control {{ $errors->has('dimension_unit_code') ? 'is-invalid' : '' }}" type="text" name="dimension_unit_code" id="dimension_unit_code" value="{{ old('dimension_unit_code', $partshistory->dimension_unit_code) }}">
                @if($errors->has('dimension_unit_code'))
                    <span class="text-danger">{{ $errors->first('dimension_unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.dimension_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_thickness">{{ trans('cruds.partshistory.fields.material_thickness') }}</label>
                <input class="form-control {{ $errors->has('material_thickness') ? 'is-invalid' : '' }}" type="number" name="material_thickness" id="material_thickness" value="{{ old('material_thickness', $partshistory->material_thickness) }}" step="0.0001">
                @if($errors->has('material_thickness'))
                    <span class="text-danger">{{ $errors->first('material_thickness') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.material_thickness_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_thickness_unit_code">{{ trans('cruds.partshistory.fields.material_thickness_unit_code') }}</label>
                <input class="form-control {{ $errors->has('material_thickness_unit_code') ? 'is-invalid' : '' }}" type="text" name="material_thickness_unit_code" id="material_thickness_unit_code" value="{{ old('material_thickness_unit_code', $partshistory->material_thickness_unit_code) }}">
                @if($errors->has('material_thickness_unit_code'))
                    <span class="text-danger">{{ $errors->first('material_thickness_unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.material_thickness_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.partshistory.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $partshistory->note) }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="special_requirement">{{ trans('cruds.partshistory.fields.special_requirement') }}</label>
                <textarea class="form-control {{ $errors->has('special_requirement') ? 'is-invalid' : '' }}" name="special_requirement" id="special_requirement">{{ old('special_requirement', $partshistory->special_requirement) }}</textarea>
                @if($errors->has('special_requirement'))
                    <span class="text-danger">{{ $errors->first('special_requirement') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.special_requirement_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="operator_note">{{ trans('cruds.partshistory.fields.operator_note') }}</label>
                <textarea class="form-control {{ $errors->has('operator_note') ? 'is-invalid' : '' }}" name="operator_note" id="operator_note">{{ old('operator_note', $partshistory->operator_note) }}</textarea>
                @if($errors->has('operator_note'))
                    <span class="text-danger">{{ $errors->first('operator_note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.operator_note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_1">{{ trans('cruds.partshistory.fields.quality_check_1') }}</label>
                <input class="form-control {{ $errors->has('quality_check_1') ? 'is-invalid' : '' }}" type="number" name="quality_check_1" id="quality_check_1" value="{{ old('quality_check_1', $partshistory->quality_check_1) }}" step="1">
                @if($errors->has('quality_check_1'))
                    <span class="text-danger">{{ $errors->first('quality_check_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_2">{{ trans('cruds.partshistory.fields.quality_check_2') }}</label>
                <input class="form-control {{ $errors->has('quality_check_2') ? 'is-invalid' : '' }}" type="number" name="quality_check_2" id="quality_check_2" value="{{ old('quality_check_2', $partshistory->quality_check_2) }}" step="1">
                @if($errors->has('quality_check_2'))
                    <span class="text-danger">{{ $errors->first('quality_check_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_3">{{ trans('cruds.partshistory.fields.quality_check_3') }}</label>
                <input class="form-control {{ $errors->has('quality_check_3') ? 'is-invalid' : '' }}" type="number" name="quality_check_3" id="quality_check_3" value="{{ old('quality_check_3', $partshistory->quality_check_3) }}" step="1">
                @if($errors->has('quality_check_3'))
                    <span class="text-danger">{{ $errors->first('quality_check_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_4">{{ trans('cruds.partshistory.fields.quality_check_4') }}</label>
                <input class="form-control {{ $errors->has('quality_check_4') ? 'is-invalid' : '' }}" type="number" name="quality_check_4" id="quality_check_4" value="{{ old('quality_check_4', $partshistory->quality_check_4) }}" step="1">
                @if($errors->has('quality_check_4'))
                    <span class="text-danger">{{ $errors->first('quality_check_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_5">{{ trans('cruds.partshistory.fields.quality_check_5') }}</label>
                <input class="form-control {{ $errors->has('quality_check_5') ? 'is-invalid' : '' }}" type="number" name="quality_check_5" id="quality_check_5" value="{{ old('quality_check_5', $partshistory->quality_check_5) }}" step="1">
                @if($errors->has('quality_check_5'))
                    <span class="text-danger">{{ $errors->first('quality_check_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_6">{{ trans('cruds.partshistory.fields.quality_check_6') }}</label>
                <input class="form-control {{ $errors->has('quality_check_6') ? 'is-invalid' : '' }}" type="number" name="quality_check_6" id="quality_check_6" value="{{ old('quality_check_6', $partshistory->quality_check_6) }}" step="1">
                @if($errors->has('quality_check_6'))
                    <span class="text-danger">{{ $errors->first('quality_check_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.quality_check_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image_count">{{ trans('cruds.partshistory.fields.image_count') }}</label>
                <input class="form-control {{ $errors->has('image_count') ? 'is-invalid' : '' }}" type="number" name="image_count" id="image_count" value="{{ old('image_count', $partshistory->image_count) }}" step="1">
                @if($errors->has('image_count'))
                    <span class="text-danger">{{ $errors->first('image_count') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.image_count_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="session">{{ trans('cruds.partshistory.fields.session') }}</label>
                <input class="form-control {{ $errors->has('session') ? 'is-invalid' : '' }}" type="text" name="session" id="session" value="{{ old('session', $partshistory->session) }}">
                @if($errors->has('session'))
                    <span class="text-danger">{{ $errors->first('session') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.session_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $partshistory->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.partshistory.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.partshistory.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $partshistory->revision) }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.partshistory.fields.revision_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>



@endsection