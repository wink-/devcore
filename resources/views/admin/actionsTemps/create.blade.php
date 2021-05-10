@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.actionsTemp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.actions-temps.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="i_dx">{{ trans('cruds.actionsTemp.fields.i_dx') }}</label>
                <input class="form-control {{ $errors->has('i_dx') ? 'is-invalid' : '' }}" type="number" name="i_dx" id="i_dx" value="{{ old('i_dx', '0') }}" step="1">
                @if($errors->has('i_dx'))
                    <span class="text-danger">{{ $errors->first('i_dx') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.i_dx_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="record_name">{{ trans('cruds.actionsTemp.fields.record_name') }}</label>
                <input class="form-control {{ $errors->has('record_name') ? 'is-invalid' : '' }}" type="text" name="record_name" id="record_name" value="{{ old('record_name', '') }}">
                @if($errors->has('record_name'))
                    <span class="text-danger">{{ $errors->first('record_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.record_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_name">{{ trans('cruds.actionsTemp.fields.form_name') }}</label>
                <input class="form-control {{ $errors->has('form_name') ? 'is-invalid' : '' }}" type="text" name="form_name" id="form_name" value="{{ old('form_name', '') }}">
                @if($errors->has('form_name'))
                    <span class="text-danger">{{ $errors->first('form_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.form_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_name">{{ trans('cruds.actionsTemp.fields.value_name') }}</label>
                <input class="form-control {{ $errors->has('value_name') ? 'is-invalid' : '' }}" type="text" name="value_name" id="value_name" value="{{ old('value_name', '') }}">
                @if($errors->has('value_name'))
                    <span class="text-danger">{{ $errors->first('value_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.value_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value">{{ trans('cruds.actionsTemp.fields.value') }}</label>
                <input class="form-control {{ $errors->has('value') ? 'is-invalid' : '' }}" type="text" name="value" id="value" value="{{ old('value', '0') }}">
                @if($errors->has('value'))
                    <span class="text-danger">{{ $errors->first('value') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.value_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rec_date">{{ trans('cruds.actionsTemp.fields.rec_date') }}</label>
                <input class="form-control date {{ $errors->has('rec_date') ? 'is-invalid' : '' }}" type="text" name="rec_date" id="rec_date" value="{{ old('rec_date') }}">
                @if($errors->has('rec_date'))
                    <span class="text-danger">{{ $errors->first('rec_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.rec_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="act_date">{{ trans('cruds.actionsTemp.fields.act_date') }}</label>
                <input class="form-control date {{ $errors->has('act_date') ? 'is-invalid' : '' }}" type="text" name="act_date" id="act_date" value="{{ old('act_date') }}">
                @if($errors->has('act_date'))
                    <span class="text-danger">{{ $errors->first('act_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.act_date_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('complete') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="complete" value="0">
                    <input class="form-check-input" type="checkbox" name="complete" id="complete" value="1" {{ old('complete', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="complete">{{ trans('cruds.actionsTemp.fields.complete') }}</label>
                </div>
                @if($errors->has('complete'))
                    <span class="text-danger">{{ $errors->first('complete') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.complete_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rec_emp_code">{{ trans('cruds.actionsTemp.fields.rec_emp_code') }}</label>
                <input class="form-control {{ $errors->has('rec_emp_code') ? 'is-invalid' : '' }}" type="text" name="rec_emp_code" id="rec_emp_code" value="{{ old('rec_emp_code', '') }}">
                @if($errors->has('rec_emp_code'))
                    <span class="text-danger">{{ $errors->first('rec_emp_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.rec_emp_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit">{{ trans('cruds.actionsTemp.fields.unit') }}</label>
                <input class="form-control {{ $errors->has('unit') ? 'is-invalid' : '' }}" type="text" name="unit" id="unit" value="{{ old('unit', '') }}">
                @if($errors->has('unit'))
                    <span class="text-danger">{{ $errors->first('unit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.unit_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="act_value">{{ trans('cruds.actionsTemp.fields.act_value') }}</label>
                <input class="form-control {{ $errors->has('act_value') ? 'is-invalid' : '' }}" type="text" name="act_value" id="act_value" value="{{ old('act_value', '') }}">
                @if($errors->has('act_value'))
                    <span class="text-danger">{{ $errors->first('act_value') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.act_value_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="scope_name">{{ trans('cruds.actionsTemp.fields.scope_name') }}</label>
                <input class="form-control {{ $errors->has('scope_name') ? 'is-invalid' : '' }}" type="text" name="scope_name" id="scope_name" value="{{ old('scope_name', '') }}">
                @if($errors->has('scope_name'))
                    <span class="text-danger">{{ $errors->first('scope_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.scope_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comment">{{ trans('cruds.actionsTemp.fields.comment') }}</label>
                <input class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}" type="text" name="comment" id="comment" value="{{ old('comment', '') }}">
                @if($errors->has('comment'))
                    <span class="text-danger">{{ $errors->first('comment') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.comment_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tank">{{ trans('cruds.actionsTemp.fields.tank') }}</label>
                <input class="form-control {{ $errors->has('tank') ? 'is-invalid' : '' }}" type="text" name="tank" id="tank" value="{{ old('tank', '') }}">
                @if($errors->has('tank'))
                    <span class="text-danger">{{ $errors->first('tank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.tank_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_stamp">{{ trans('cruds.actionsTemp.fields.time_stamp') }}</label>
                <input class="form-control datetime {{ $errors->has('time_stamp') ? 'is-invalid' : '' }}" type="text" name="time_stamp" id="time_stamp" value="{{ old('time_stamp') }}">
                @if($errors->has('time_stamp'))
                    <span class="text-danger">{{ $errors->first('time_stamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.time_stamp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emp_name">{{ trans('cruds.actionsTemp.fields.emp_name') }}</label>
                <input class="form-control {{ $errors->has('emp_name') ? 'is-invalid' : '' }}" type="text" name="emp_name" id="emp_name" value="{{ old('emp_name', '') }}">
                @if($errors->has('emp_name'))
                    <span class="text-danger">{{ $errors->first('emp_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.emp_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="i_dy">{{ trans('cruds.actionsTemp.fields.i_dy') }}</label>
                <input class="form-control {{ $errors->has('i_dy') ? 'is-invalid' : '' }}" type="text" name="i_dy" id="i_dy" value="{{ old('i_dy', '') }}">
                @if($errors->has('i_dy'))
                    <span class="text-danger">{{ $errors->first('i_dy') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.i_dy_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_num">{{ trans('cruds.actionsTemp.fields.value_num') }}</label>
                <input class="form-control {{ $errors->has('value_num') ? 'is-invalid' : '' }}" type="number" name="value_num" id="value_num" value="{{ old('value_num', '') }}" step="1">
                @if($errors->has('value_num'))
                    <span class="text-danger">{{ $errors->first('value_num') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.actionsTemp.fields.value_num_helper') }}</span>
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