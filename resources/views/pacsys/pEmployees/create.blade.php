@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.pEmployee.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.p-employees.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.pEmployee.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pEmployee.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_name">{{ trans('cruds.pEmployee.fields.user_name') }}</label>
                <input class="form-control {{ $errors->has('user_name') ? 'is-invalid' : '' }}" type="text" name="user_name" id="user_name" value="{{ old('user_name', '') }}">
                @if($errors->has('user_name'))
                    <span class="text-danger">{{ $errors->first('user_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pEmployee.fields.user_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code">{{ trans('cruds.pEmployee.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}">
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pEmployee.fields.code_helper') }}</span>
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