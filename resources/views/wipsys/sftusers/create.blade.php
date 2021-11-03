@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.sftuser.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("wipsys.sftusers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="userid">{{ trans('cruds.sftuser.fields.userid') }}</label>
                <input class="form-control {{ $errors->has('userid') ? 'is-invalid' : '' }}" type="text" name="userid" id="userid" value="{{ old('userid', '') }}">
                @if($errors->has('userid'))
                    <span class="text-danger">{{ $errors->first('userid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.userid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code">{{ trans('cruds.sftuser.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}">
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user">{{ trans('cruds.sftuser.fields.user') }}</label>
                <input class="form-control {{ $errors->has('user') ? 'is-invalid' : '' }}" type="text" name="user" id="user" value="{{ old('user', '') }}">
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.sftuser.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="password">{{ trans('cruds.sftuser.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="text" name="password" id="password" value="{{ old('password', '') }}">
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.password_helper') }}</span>
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