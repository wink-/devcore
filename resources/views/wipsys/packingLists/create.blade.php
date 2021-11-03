@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.packingList.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.packing-lists.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="number">{{ trans('cruds.packingList.fields.number') }}</label>
                <input class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" type="number" name="number" id="number" value="{{ old('number', '') }}" step="1">
                @if($errors->has('number'))
                    <span class="text-danger">{{ $errors->first('number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date">{{ trans('cruds.packingList.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date') }}">
                @if($errors->has('date'))
                    <span class="text-danger">{{ $errors->first('date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="employee_code">{{ trans('cruds.packingList.fields.employee_code') }}</label>
                <input class="form-control {{ $errors->has('employee_code') ? 'is-invalid' : '' }}" type="text" name="employee_code" id="employee_code" value="{{ old('employee_code', '') }}">
                @if($errors->has('employee_code'))
                    <span class="text-danger">{{ $errors->first('employee_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.employee_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_code">{{ trans('cruds.packingList.fields.user_code') }}</label>
                <input class="form-control {{ $errors->has('user_code') ? 'is-invalid' : '' }}" type="text" name="user_code" id="user_code" value="{{ old('user_code', '') }}">
                @if($errors->has('user_code'))
                    <span class="text-danger">{{ $errors->first('user_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.user_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_code">{{ trans('cruds.packingList.fields.customer_code') }}</label>
                <input class="form-control {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" type="text" name="customer_code" id="customer_code" value="{{ old('customer_code', '') }}">
                @if($errors->has('customer_code'))
                    <span class="text-danger">{{ $errors->first('customer_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="destination_code">{{ trans('cruds.packingList.fields.destination_code') }}</label>
                <input class="form-control {{ $errors->has('destination_code') ? 'is-invalid' : '' }}" type="text" name="destination_code" id="destination_code" value="{{ old('destination_code', '') }}">
                @if($errors->has('destination_code'))
                    <span class="text-danger">{{ $errors->first('destination_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.destination_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="carrier_code">{{ trans('cruds.packingList.fields.carrier_code') }}</label>
                <input class="form-control {{ $errors->has('carrier_code') ? 'is-invalid' : '' }}" type="text" name="carrier_code" id="carrier_code" value="{{ old('carrier_code', '') }}">
                @if($errors->has('carrier_code'))
                    <span class="text-danger">{{ $errors->first('carrier_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.carrier_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="freight_code">{{ trans('cruds.packingList.fields.freight_code') }}</label>
                <input class="form-control {{ $errors->has('freight_code') ? 'is-invalid' : '' }}" type="text" name="freight_code" id="freight_code" value="{{ old('freight_code', '') }}">
                @if($errors->has('freight_code'))
                    <span class="text-danger">{{ $errors->first('freight_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.freight_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_purchase_order">{{ trans('cruds.packingList.fields.customer_purchase_order') }}</label>
                <input class="form-control {{ $errors->has('customer_purchase_order') ? 'is-invalid' : '' }}" type="text" name="customer_purchase_order" id="customer_purchase_order" value="{{ old('customer_purchase_order', '') }}">
                @if($errors->has('customer_purchase_order'))
                    <span class="text-danger">{{ $errors->first('customer_purchase_order') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.customer_purchase_order_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('cod') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="cod" value="0">
                    <input class="form-check-input" type="checkbox" name="cod" id="cod" value="1" {{ old('cod', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="cod">{{ trans('cruds.packingList.fields.cod') }}</label>
                </div>
                @if($errors->has('cod'))
                    <span class="text-danger">{{ $errors->first('cod') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.cod_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_received">{{ trans('cruds.packingList.fields.date_received') }}</label>
                <input class="form-control date {{ $errors->has('date_received') ? 'is-invalid' : '' }}" type="text" name="date_received" id="date_received" value="{{ old('date_received') }}">
                @if($errors->has('date_received'))
                    <span class="text-danger">{{ $errors->first('date_received') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.date_received_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="session">{{ trans('cruds.packingList.fields.session') }}</label>
                <input class="form-control {{ $errors->has('session') ? 'is-invalid' : '' }}" type="text" name="session" id="session" value="{{ old('session', '') }}">
                @if($errors->has('session'))
                    <span class="text-danger">{{ $errors->first('session') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.session_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.packingList.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.packingList.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingList.fields.revision_helper') }}</span>
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