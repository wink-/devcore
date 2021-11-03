@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.security.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("pacsys.securities.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="emp_code">{{ trans('cruds.security.fields.emp_code') }}</label>
                <input class="form-control {{ $errors->has('emp_code') ? 'is-invalid' : '' }}" type="text" name="emp_code" id="emp_code" value="{{ old('emp_code', '') }}">
                @if($errors->has('emp_code'))
                    <span class="text-danger">{{ $errors->first('emp_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.security.fields.emp_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="scope">{{ trans('cruds.security.fields.scope') }}</label>
                <input class="form-control {{ $errors->has('scope') ? 'is-invalid' : '' }}" type="text" name="scope" id="scope" value="{{ old('scope', '') }}">
                @if($errors->has('scope'))
                    <span class="text-danger">{{ $errors->first('scope') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.security.fields.scope_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_stamp">{{ trans('cruds.security.fields.time_stamp') }}</label>
                <input class="form-control datetime {{ $errors->has('time_stamp') ? 'is-invalid' : '' }}" type="text" name="time_stamp" id="time_stamp" value="{{ old('time_stamp') }}">
                @if($errors->has('time_stamp'))
                    <span class="text-danger">{{ $errors->first('time_stamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.security.fields.time_stamp_helper') }}</span>
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