@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.quote.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.quotes.update", [$quote->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="customer_id">{{ trans('cruds.quote.fields.customer') }}</label>
                <select class="form-control select2 {{ $errors->has('customer') ? 'is-invalid' : '' }}" name="customer_id" id="customer_id" required>
                    @foreach($customers as $id => $entry)
                        <option value="{{ $id }}" {{ (old('customer_id') ? old('customer_id') : $quote->customer->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer'))
                    <span class="text-danger">{{ $errors->first('customer') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_code">{{ trans('cruds.quote.fields.customer_code') }}</label>
                <input class="form-control {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" type="text" name="customer_code" id="customer_code" value="{{ old('customer_code', $quote->customer_code) }}">
                @if($errors->has('customer_code'))
                    <span class="text-danger">{{ $errors->first('customer_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_name">{{ trans('cruds.quote.fields.customer_name') }}</label>
                <input class="form-control {{ $errors->has('customer_name') ? 'is-invalid' : '' }}" type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', $quote->customer_name) }}">
                @if($errors->has('customer_name'))
                    <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.customer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_id">{{ trans('cruds.quote.fields.contact') }}</label>
                <select class="form-control select2 {{ $errors->has('contact') ? 'is-invalid' : '' }}" name="contact_id" id="contact_id">
                    @foreach($contacts as $id => $entry)
                        <option value="{{ $id }}" {{ (old('contact_id') ? old('contact_id') : $quote->contact->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('contact'))
                    <span class="text-danger">{{ $errors->first('contact') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.contact_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_rfq">{{ trans('cruds.quote.fields.customer_rfq') }}</label>
                <input class="form-control {{ $errors->has('customer_rfq') ? 'is-invalid' : '' }}" type="text" name="customer_rfq" id="customer_rfq" value="{{ old('customer_rfq', $quote->customer_rfq) }}">
                @if($errors->has('customer_rfq'))
                    <span class="text-danger">{{ $errors->first('customer_rfq') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.customer_rfq_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="partid">{{ trans('cruds.quote.fields.partid') }}</label>
                <input class="form-control {{ $errors->has('partid') ? 'is-invalid' : '' }}" type="number" name="partid" id="partid" value="{{ old('partid', $quote->partid) }}" step="1">
                @if($errors->has('partid'))
                    <span class="text-danger">{{ $errors->first('partid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.partid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="part_number">{{ trans('cruds.quote.fields.part_number') }}</label>
                <input class="form-control {{ $errors->has('part_number') ? 'is-invalid' : '' }}" type="text" name="part_number" id="part_number" value="{{ old('part_number', $quote->part_number) }}" required>
                @if($errors->has('part_number'))
                    <span class="text-danger">{{ $errors->first('part_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.part_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision_code">{{ trans('cruds.quote.fields.revision_code') }}</label>
                <input class="form-control {{ $errors->has('revision_code') ? 'is-invalid' : '' }}" type="text" name="revision_code" id="revision_code" value="{{ old('revision_code', $quote->revision_code) }}">
                @if($errors->has('revision_code'))
                    <span class="text-danger">{{ $errors->first('revision_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.revision_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="part_description">{{ trans('cruds.quote.fields.part_description') }}</label>
                <input class="form-control {{ $errors->has('part_description') ? 'is-invalid' : '' }}" type="text" name="part_description" id="part_description" value="{{ old('part_description', $quote->part_description) }}">
                @if($errors->has('part_description'))
                    <span class="text-danger">{{ $errors->first('part_description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.part_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="specification">{{ trans('cruds.quote.fields.specification') }}</label>
                <input class="form-control {{ $errors->has('specification') ? 'is-invalid' : '' }}" type="text" name="specification" id="specification" value="{{ old('specification', $quote->specification) }}">
                @if($errors->has('specification'))
                    <span class="text-danger">{{ $errors->first('specification') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.specification_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material">{{ trans('cruds.quote.fields.material') }}</label>
                <input class="form-control {{ $errors->has('material') ? 'is-invalid' : '' }}" type="text" name="material" id="material" value="{{ old('material', $quote->material) }}">
                @if($errors->has('material'))
                    <span class="text-danger">{{ $errors->first('material') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.material_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="process_id">{{ trans('cruds.quote.fields.process') }}</label>
                <select class="form-control select2 {{ $errors->has('process') ? 'is-invalid' : '' }}" name="process_id" id="process_id" required>
                    @foreach($processes as $id => $entry)
                        <option value="{{ $id }}" {{ (old('process_id') ? old('process_id') : $quote->process->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('process'))
                    <span class="text-danger">{{ $errors->first('process') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.process_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="method_code">{{ trans('cruds.quote.fields.method_code') }}</label>
                <input class="form-control {{ $errors->has('method_code') ? 'is-invalid' : '' }}" type="text" name="method_code" id="method_code" value="{{ old('method_code', $quote->method_code) }}">
                @if($errors->has('method_code'))
                    <span class="text-danger">{{ $errors->first('method_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.method_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="method">{{ trans('cruds.quote.fields.method') }}</label>
                <input class="form-control {{ $errors->has('method') ? 'is-invalid' : '' }}" type="text" name="method" id="method" value="{{ old('method', $quote->method) }}">
                @if($errors->has('method'))
                    <span class="text-danger">{{ $errors->first('method') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.method_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity_minimum">{{ trans('cruds.quote.fields.quantity_minimum') }}</label>
                <input class="form-control {{ $errors->has('quantity_minimum') ? 'is-invalid' : '' }}" type="text" name="quantity_minimum" id="quantity_minimum" value="{{ old('quantity_minimum', $quote->quantity_minimum) }}">
                @if($errors->has('quantity_minimum'))
                    <span class="text-danger">{{ $errors->first('quantity_minimum') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.quantity_minimum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity_maximum">{{ trans('cruds.quote.fields.quantity_maximum') }}</label>
                <input class="form-control {{ $errors->has('quantity_maximum') ? 'is-invalid' : '' }}" type="text" name="quantity_maximum" id="quantity_maximum" value="{{ old('quantity_maximum', $quote->quantity_maximum) }}">
                @if($errors->has('quantity_maximum'))
                    <span class="text-danger">{{ $errors->first('quantity_maximum') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.quantity_maximum_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.quote.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $quote->price) }}" step="0.01" required>
                @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="units">{{ trans('cruds.quote.fields.units') }}</label>
                <input class="form-control {{ $errors->has('units') ? 'is-invalid' : '' }}" type="text" name="units" id="units" value="{{ old('units', $quote->units) }}">
                @if($errors->has('units'))
                    <span class="text-danger">{{ $errors->first('units') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.units_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="minimum_lot_charge">{{ trans('cruds.quote.fields.minimum_lot_charge') }}</label>
                <input class="form-control {{ $errors->has('minimum_lot_charge') ? 'is-invalid' : '' }}" type="number" name="minimum_lot_charge" id="minimum_lot_charge" value="{{ old('minimum_lot_charge', $quote->minimum_lot_charge) }}" step="0.01" required>
                @if($errors->has('minimum_lot_charge'))
                    <span class="text-danger">{{ $errors->first('minimum_lot_charge') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.minimum_lot_charge_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity_price_break">{{ trans('cruds.quote.fields.quantity_price_break') }}</label>
                <input class="form-control {{ $errors->has('quantity_price_break') ? 'is-invalid' : '' }}" type="number" name="quantity_price_break" id="quantity_price_break" value="{{ old('quantity_price_break', $quote->quantity_price_break) }}" step="1">
                @if($errors->has('quantity_price_break'))
                    <span class="text-danger">{{ $errors->first('quantity_price_break') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.quantity_price_break_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_break">{{ trans('cruds.quote.fields.price_break') }}</label>
                <input class="form-control {{ $errors->has('price_break') ? 'is-invalid' : '' }}" type="number" name="price_break" id="price_break" value="{{ old('price_break', $quote->price_break) }}" step="0.01">
                @if($errors->has('price_break'))
                    <span class="text-danger">{{ $errors->first('price_break') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.price_break_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="weight">{{ trans('cruds.quote.fields.weight') }}</label>
                <input class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" type="text" name="weight" id="weight" value="{{ old('weight', $quote->weight) }}">
                @if($errors->has('weight'))
                    <span class="text-danger">{{ $errors->first('weight') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="surface_area">{{ trans('cruds.quote.fields.surface_area') }}</label>
                <input class="form-control {{ $errors->has('surface_area') ? 'is-invalid' : '' }}" type="text" name="surface_area" id="surface_area" value="{{ old('surface_area', $quote->surface_area) }}">
                @if($errors->has('surface_area'))
                    <span class="text-danger">{{ $errors->first('surface_area') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.surface_area_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_minimum">{{ trans('cruds.quote.fields.thickness_minimum') }}</label>
                <input class="form-control {{ $errors->has('thickness_minimum') ? 'is-invalid' : '' }}" type="text" name="thickness_minimum" id="thickness_minimum" value="{{ old('thickness_minimum', $quote->thickness_minimum) }}">
                @if($errors->has('thickness_minimum'))
                    <span class="text-danger">{{ $errors->first('thickness_minimum') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.thickness_minimum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_maximum">{{ trans('cruds.quote.fields.thickness_maximum') }}</label>
                <input class="form-control {{ $errors->has('thickness_maximum') ? 'is-invalid' : '' }}" type="text" name="thickness_maximum" id="thickness_maximum" value="{{ old('thickness_maximum', $quote->thickness_maximum) }}">
                @if($errors->has('thickness_maximum'))
                    <span class="text-danger">{{ $errors->first('thickness_maximum') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.thickness_maximum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.quote.fields.notes') }}</label>
                <textarea class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{{ old('notes', $quote->notes) }}</textarea>
                @if($errors->has('notes'))
                    <span class="text-danger">{{ $errors->first('notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comments">{{ trans('cruds.quote.fields.comments') }}</label>
                <textarea class="form-control {{ $errors->has('comments') ? 'is-invalid' : '' }}" name="comments" id="comments">{{ old('comments', $quote->comments) }}</textarea>
                @if($errors->has('comments'))
                    <span class="text-danger">{{ $errors->first('comments') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.comments_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('baking') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="baking" value="0">
                    <input class="form-check-input" type="checkbox" name="baking" id="baking" value="1" {{ $quote->baking || old('baking', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="baking">{{ trans('cruds.quote.fields.baking') }}</label>
                </div>
                @if($errors->has('baking'))
                    <span class="text-danger">{{ $errors->first('baking') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.baking_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_time_pre">{{ trans('cruds.quote.fields.baking_time_pre') }}</label>
                <input class="form-control {{ $errors->has('baking_time_pre') ? 'is-invalid' : '' }}" type="text" name="baking_time_pre" id="baking_time_pre" value="{{ old('baking_time_pre', $quote->baking_time_pre) }}">
                @if($errors->has('baking_time_pre'))
                    <span class="text-danger">{{ $errors->first('baking_time_pre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.baking_time_pre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_temp_pre">{{ trans('cruds.quote.fields.baking_temp_pre') }}</label>
                <input class="form-control {{ $errors->has('baking_temp_pre') ? 'is-invalid' : '' }}" type="text" name="baking_temp_pre" id="baking_temp_pre" value="{{ old('baking_temp_pre', $quote->baking_temp_pre) }}">
                @if($errors->has('baking_temp_pre'))
                    <span class="text-danger">{{ $errors->first('baking_temp_pre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.baking_temp_pre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_time_post">{{ trans('cruds.quote.fields.baking_time_post') }}</label>
                <input class="form-control {{ $errors->has('baking_time_post') ? 'is-invalid' : '' }}" type="text" name="baking_time_post" id="baking_time_post" value="{{ old('baking_time_post', $quote->baking_time_post) }}">
                @if($errors->has('baking_time_post'))
                    <span class="text-danger">{{ $errors->first('baking_time_post') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.baking_time_post_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_temp_post">{{ trans('cruds.quote.fields.baking_temp_post') }}</label>
                <input class="form-control {{ $errors->has('baking_temp_post') ? 'is-invalid' : '' }}" type="text" name="baking_temp_post" id="baking_temp_post" value="{{ old('baking_temp_post', $quote->baking_temp_post) }}">
                @if($errors->has('baking_temp_post'))
                    <span class="text-danger">{{ $errors->first('baking_temp_post') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.baking_temp_post_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bake_notes">{{ trans('cruds.quote.fields.bake_notes') }}</label>
                <input class="form-control {{ $errors->has('bake_notes') ? 'is-invalid' : '' }}" type="text" name="bake_notes" id="bake_notes" value="{{ old('bake_notes', $quote->bake_notes) }}">
                @if($errors->has('bake_notes'))
                    <span class="text-danger">{{ $errors->first('bake_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.bake_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('blasting') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="blasting" value="0">
                    <input class="form-check-input" type="checkbox" name="blasting" id="blasting" value="1" {{ $quote->blasting || old('blasting', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="blasting">{{ trans('cruds.quote.fields.blasting') }}</label>
                </div>
                @if($errors->has('blasting'))
                    <span class="text-danger">{{ $errors->first('blasting') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.blasting_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="blast_notes">{{ trans('cruds.quote.fields.blast_notes') }}</label>
                <input class="form-control {{ $errors->has('blast_notes') ? 'is-invalid' : '' }}" type="text" name="blast_notes" id="blast_notes" value="{{ old('blast_notes', $quote->blast_notes) }}">
                @if($errors->has('blast_notes'))
                    <span class="text-danger">{{ $errors->first('blast_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.blast_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('masking') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="masking" value="0">
                    <input class="form-check-input" type="checkbox" name="masking" id="masking" value="1" {{ $quote->masking || old('masking', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="masking">{{ trans('cruds.quote.fields.masking') }}</label>
                </div>
                @if($errors->has('masking'))
                    <span class="text-danger">{{ $errors->first('masking') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.masking_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mask_notes">{{ trans('cruds.quote.fields.mask_notes') }}</label>
                <input class="form-control {{ $errors->has('mask_notes') ? 'is-invalid' : '' }}" type="text" name="mask_notes" id="mask_notes" value="{{ old('mask_notes', $quote->mask_notes) }}">
                @if($errors->has('mask_notes'))
                    <span class="text-danger">{{ $errors->first('mask_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.mask_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('testing') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="testing" value="0">
                    <input class="form-check-input" type="checkbox" name="testing" id="testing" value="1" {{ $quote->testing || old('testing', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="testing">{{ trans('cruds.quote.fields.testing') }}</label>
                </div>
                @if($errors->has('testing'))
                    <span class="text-danger">{{ $errors->first('testing') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.testing_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="test_notes">{{ trans('cruds.quote.fields.test_notes') }}</label>
                <input class="form-control {{ $errors->has('test_notes') ? 'is-invalid' : '' }}" type="text" name="test_notes" id="test_notes" value="{{ old('test_notes', $quote->test_notes) }}">
                @if($errors->has('test_notes'))
                    <span class="text-danger">{{ $errors->first('test_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.test_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.quote.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $quote->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $quote->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.quote.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.quote.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $quote->revision) }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.revision_helper') }}</span>
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