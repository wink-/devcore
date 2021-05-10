@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.session.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sessions.update", [$session->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="session">{{ trans('cruds.session.fields.session') }}</label>
                <input class="form-control {{ $errors->has('session') ? 'is-invalid' : '' }}" type="text" name="session" id="session" value="{{ old('session', $session->session) }}">
                @if($errors->has('session'))
                    <span class="text-danger">{{ $errors->first('session') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.session_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="jwt">{{ trans('cruds.session.fields.jwt') }}</label>
                <input class="form-control {{ $errors->has('jwt') ? 'is-invalid' : '' }}" type="text" name="jwt" id="jwt" value="{{ old('jwt', $session->jwt) }}">
                @if($errors->has('jwt'))
                    <span class="text-danger">{{ $errors->first('jwt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.jwt_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="active" value="0">
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ $session->active || old('active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">{{ trans('cruds.session.fields.active') }}</label>
                </div>
                @if($errors->has('active'))
                    <span class="text-danger">{{ $errors->first('active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="key_strokes">{{ trans('cruds.session.fields.key_strokes') }}</label>
                <input class="form-control {{ $errors->has('key_strokes') ? 'is-invalid' : '' }}" type="text" name="key_strokes" id="key_strokes" value="{{ old('key_strokes', $session->key_strokes) }}">
                @if($errors->has('key_strokes'))
                    <span class="text-danger">{{ $errors->first('key_strokes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.key_strokes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user">{{ trans('cruds.session.fields.user') }}</label>
                <input class="form-control {{ $errors->has('user') ? 'is-invalid' : '' }}" type="text" name="user" id="user" value="{{ old('user', $session->user) }}">
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.session.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $session->email) }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="userid">{{ trans('cruds.session.fields.userid') }}</label>
                <input class="form-control {{ $errors->has('userid') ? 'is-invalid' : '' }}" type="text" name="userid" id="userid" value="{{ old('userid', $session->userid) }}">
                @if($errors->has('userid'))
                    <span class="text-danger">{{ $errors->first('userid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.userid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_code">{{ trans('cruds.session.fields.user_code') }}</label>
                <input class="form-control {{ $errors->has('user_code') ? 'is-invalid' : '' }}" type="text" name="user_code" id="user_code" value="{{ old('user_code', $session->user_code) }}">
                @if($errors->has('user_code'))
                    <span class="text-danger">{{ $errors->first('user_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.user_code_helper') }}</span>
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