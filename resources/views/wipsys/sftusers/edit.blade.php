@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit {{ trans('cruds.sftuser.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("wipsys.sftusers.update", [$sftuser->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="userid">{{ trans('cruds.sftuser.fields.userid') }}</label>
                <input class="form-control {{ $errors->has('userid') ? 'is-invalid' : '' }}" type="text" name="userid" id="userid" value="{{ old('userid', $sftuser->userid) }}">
                @if($errors->has('userid'))
                    <span class="text-danger">{{ $errors->first('userid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.userid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code">{{ trans('cruds.sftuser.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $sftuser->code) }}">
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user">{{ trans('cruds.sftuser.fields.user') }}</label>
                <input class="form-control {{ $errors->has('user') ? 'is-invalid' : '' }}" type="text" name="user" id="user" value="{{ old('user', $sftuser->user) }}">
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.sftuser.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $sftuser->email) }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="password">{{ trans('cruds.sftuser.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="text" name="password" id="password" value="{{ old('password', $sftuser->password) }}">
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $sftuser->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.sftuser.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.sftuser.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $sftuser->revision) }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sftuser.fields.revision_helper') }}</span>
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