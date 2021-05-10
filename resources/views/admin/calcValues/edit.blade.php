@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.calcValue.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.calc-values.update", [$calcValue->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="value_name">{{ trans('cruds.calcValue.fields.value_name') }}</label>
                <input class="form-control {{ $errors->has('value_name') ? 'is-invalid' : '' }}" type="text" name="value_name" id="value_name" value="{{ old('value_name', $calcValue->value_name) }}">
                @if($errors->has('value_name'))
                    <span class="text-danger">{{ $errors->first('value_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.calcValue.fields.value_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.calcValue.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $calcValue->description) }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.calcValue.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="formula">{{ trans('cruds.calcValue.fields.formula') }}</label>
                <input class="form-control {{ $errors->has('formula') ? 'is-invalid' : '' }}" type="text" name="formula" id="formula" value="{{ old('formula', $calcValue->formula) }}">
                @if($errors->has('formula'))
                    <span class="text-danger">{{ $errors->first('formula') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.calcValue.fields.formula_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="order_calc">{{ trans('cruds.calcValue.fields.order_calc') }}</label>
                <input class="form-control {{ $errors->has('order_calc') ? 'is-invalid' : '' }}" type="number" name="order_calc" id="order_calc" value="{{ old('order_calc', $calcValue->order_calc) }}" step="1">
                @if($errors->has('order_calc'))
                    <span class="text-danger">{{ $errors->first('order_calc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.calcValue.fields.order_calc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_name">{{ trans('cruds.calcValue.fields.form_name') }}</label>
                <input class="form-control {{ $errors->has('form_name') ? 'is-invalid' : '' }}" type="text" name="form_name" id="form_name" value="{{ old('form_name', $calcValue->form_name) }}">
                @if($errors->has('form_name'))
                    <span class="text-danger">{{ $errors->first('form_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.calcValue.fields.form_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="decimal_places">{{ trans('cruds.calcValue.fields.decimal_places') }}</label>
                <input class="form-control {{ $errors->has('decimal_places') ? 'is-invalid' : '' }}" type="number" name="decimal_places" id="decimal_places" value="{{ old('decimal_places', $calcValue->decimal_places) }}" step="1">
                @if($errors->has('decimal_places'))
                    <span class="text-danger">{{ $errors->first('decimal_places') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.calcValue.fields.decimal_places_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_stamp">{{ trans('cruds.calcValue.fields.time_stamp') }}</label>
                <input class="form-control datetime {{ $errors->has('time_stamp') ? 'is-invalid' : '' }}" type="text" name="time_stamp" id="time_stamp" value="{{ old('time_stamp', $calcValue->time_stamp) }}">
                @if($errors->has('time_stamp'))
                    <span class="text-danger">{{ $errors->first('time_stamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.calcValue.fields.time_stamp_helper') }}</span>
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