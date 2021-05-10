@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.employee.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employees.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.employee.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.employee.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}" required>
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pin">{{ trans('cruds.employee.fields.pin') }}</label>
                <input class="form-control {{ $errors->has('pin') ? 'is-invalid' : '' }}" type="text" name="pin" id="pin" value="{{ old('pin', '') }}">
                @if($errors->has('pin'))
                    <span class="text-danger">{{ $errors->first('pin') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.pin_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="password">{{ trans('cruds.employee.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="text" name="password" id="password" value="{{ old('password', '') }}">
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('production') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="production" value="0">
                    <input class="form-check-input" type="checkbox" name="production" id="production" value="1" {{ old('production', 0) == 1 || old('production') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="production">{{ trans('cruds.employee.fields.production') }}</label>
                </div>
                @if($errors->has('production'))
                    <span class="text-danger">{{ $errors->first('production') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.production_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('supervisor') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="supervisor" value="0">
                    <input class="form-check-input" type="checkbox" name="supervisor" id="supervisor" value="1" {{ old('supervisor', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="supervisor">{{ trans('cruds.employee.fields.supervisor') }}</label>
                </div>
                @if($errors->has('supervisor'))
                    <span class="text-danger">{{ $errors->first('supervisor') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.supervisor_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.employee.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.note_helper') }}</span>
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