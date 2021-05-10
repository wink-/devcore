@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.workorderhistory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.workorderhistories.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="customer_code">{{ trans('cruds.workorderhistory.fields.customer_code') }}</label>
                <input class="form-control {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" type="text" name="customer_code" id="customer_code" value="{{ old('customer_code', '') }}" required>
                @if($errors->has('customer_code'))
                    <span class="text-danger">{{ $errors->first('customer_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_name">{{ trans('cruds.workorderhistory.fields.customer_name') }}</label>
                <input class="form-control {{ $errors->has('customer_name') ? 'is-invalid' : '' }}" type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', '') }}">
                @if($errors->has('customer_name'))
                    <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.customer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="part_id">{{ trans('cruds.workorderhistory.fields.part') }}</label>
                <select class="form-control select2 {{ $errors->has('part') ? 'is-invalid' : '' }}" name="part_id" id="part_id" required>
                    @foreach($parts as $id => $part)
                        <option value="{{ $id }}" {{ old('part_id') == $id ? 'selected' : '' }}>{{ $part }}</option>
                    @endforeach
                </select>
                @if($errors->has('part'))
                    <span class="text-danger">{{ $errors->first('part') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.part_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="part_number">{{ trans('cruds.workorderhistory.fields.part_number') }}</label>
                <input class="form-control {{ $errors->has('part_number') ? 'is-invalid' : '' }}" type="text" name="part_number" id="part_number" value="{{ old('part_number', '') }}">
                @if($errors->has('part_number'))
                    <span class="text-danger">{{ $errors->first('part_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.part_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="process_code">{{ trans('cruds.workorderhistory.fields.process_code') }}</label>
                <input class="form-control {{ $errors->has('process_code') ? 'is-invalid' : '' }}" type="text" name="process_code" id="process_code" value="{{ old('process_code', '') }}">
                @if($errors->has('process_code'))
                    <span class="text-danger">{{ $errors->first('process_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.process_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.workorderhistory.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', '') }}" step="0.01">
                @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_code">{{ trans('cruds.workorderhistory.fields.price_code') }}</label>
                <input class="form-control {{ $errors->has('price_code') ? 'is-invalid' : '' }}" type="text" name="price_code" id="price_code" value="{{ old('price_code', '') }}">
                @if($errors->has('price_code'))
                    <span class="text-danger">{{ $errors->first('price_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.price_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_received">{{ trans('cruds.workorderhistory.fields.date_received') }}</label>
                <input class="form-control date {{ $errors->has('date_received') ? 'is-invalid' : '' }}" type="text" name="date_received" id="date_received" value="{{ old('date_received') }}">
                @if($errors->has('date_received'))
                    <span class="text-danger">{{ $errors->first('date_received') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.date_received_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_required">{{ trans('cruds.workorderhistory.fields.date_required') }}</label>
                <input class="form-control date {{ $errors->has('date_required') ? 'is-invalid' : '' }}" type="text" name="date_required" id="date_required" value="{{ old('date_required') }}">
                @if($errors->has('date_required'))
                    <span class="text-danger">{{ $errors->first('date_required') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.date_required_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_purchase_order">{{ trans('cruds.workorderhistory.fields.customer_purchase_order') }}</label>
                <input class="form-control {{ $errors->has('customer_purchase_order') ? 'is-invalid' : '' }}" type="text" name="customer_purchase_order" id="customer_purchase_order" value="{{ old('customer_purchase_order', '') }}">
                @if($errors->has('customer_purchase_order'))
                    <span class="text-danger">{{ $errors->first('customer_purchase_order') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.customer_purchase_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_packing_list">{{ trans('cruds.workorderhistory.fields.customer_packing_list') }}</label>
                <input class="form-control {{ $errors->has('customer_packing_list') ? 'is-invalid' : '' }}" type="text" name="customer_packing_list" id="customer_packing_list" value="{{ old('customer_packing_list', '') }}">
                @if($errors->has('customer_packing_list'))
                    <span class="text-danger">{{ $errors->first('customer_packing_list') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.customer_packing_list_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="quantity">{{ trans('cruds.workorderhistory.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="text" name="quantity" id="quantity" value="{{ old('quantity', '') }}" required>
                @if($errors->has('quantity'))
                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_code">{{ trans('cruds.workorderhistory.fields.unit_code') }}</label>
                <input class="form-control {{ $errors->has('unit_code') ? 'is-invalid' : '' }}" type="text" name="unit_code" id="unit_code" value="{{ old('unit_code', '') }}">
                @if($errors->has('unit_code'))
                    <span class="text-danger">{{ $errors->first('unit_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="destination_code">{{ trans('cruds.workorderhistory.fields.destination_code') }}</label>
                <input class="form-control {{ $errors->has('destination_code') ? 'is-invalid' : '' }}" type="text" name="destination_code" id="destination_code" value="{{ old('destination_code', '') }}">
                @if($errors->has('destination_code'))
                    <span class="text-danger">{{ $errors->first('destination_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.destination_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="carrier_code">{{ trans('cruds.workorderhistory.fields.carrier_code') }}</label>
                <input class="form-control {{ $errors->has('carrier_code') ? 'is-invalid' : '' }}" type="text" name="carrier_code" id="carrier_code" value="{{ old('carrier_code', '') }}">
                @if($errors->has('carrier_code'))
                    <span class="text-danger">{{ $errors->first('carrier_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.carrier_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="freight_code">{{ trans('cruds.workorderhistory.fields.freight_code') }}</label>
                <input class="form-control {{ $errors->has('freight_code') ? 'is-invalid' : '' }}" type="text" name="freight_code" id="freight_code" value="{{ old('freight_code', '') }}">
                @if($errors->has('freight_code'))
                    <span class="text-danger">{{ $errors->first('freight_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.freight_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="priority">{{ trans('cruds.workorderhistory.fields.priority') }}</label>
                <input class="form-control {{ $errors->has('priority') ? 'is-invalid' : '' }}" type="number" name="priority" id="priority" value="{{ old('priority', '') }}" step="1">
                @if($errors->has('priority'))
                    <span class="text-danger">{{ $errors->first('priority') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.priority_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('rework') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="rework" value="0">
                    <input class="form-check-input" type="checkbox" name="rework" id="rework" value="1" {{ old('rework', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="rework">{{ trans('cruds.workorderhistory.fields.rework') }}</label>
                </div>
                @if($errors->has('rework'))
                    <span class="text-danger">{{ $errors->first('rework') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.rework_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('hot') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="hot" value="0">
                    <input class="form-check-input" type="checkbox" name="hot" id="hot" value="1" {{ old('hot', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="hot">{{ trans('cruds.workorderhistory.fields.hot') }}</label>
                </div>
                @if($errors->has('hot'))
                    <span class="text-danger">{{ $errors->first('hot') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.hot_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.workorderhistory.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.workorderhistory.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workorderhistory.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection