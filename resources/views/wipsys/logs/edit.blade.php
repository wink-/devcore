@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.log.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.logs.update", [$log->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="session">{{ trans('cruds.log.fields.session') }}</label>
                <input class="form-control {{ $errors->has('session') ? 'is-invalid' : '' }}" type="text" name="session" id="session" value="{{ old('session', $log->session) }}">
                @if($errors->has('session'))
                    <span class="text-danger">{{ $errors->first('session') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.log.fields.session_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="key_strokes">{{ trans('cruds.log.fields.key_strokes') }}</label>
                <input class="form-control {{ $errors->has('key_strokes') ? 'is-invalid' : '' }}" type="text" name="key_strokes" id="key_strokes" value="{{ old('key_strokes', $log->key_strokes) }}">
                @if($errors->has('key_strokes'))
                    <span class="text-danger">{{ $errors->first('key_strokes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.log.fields.key_strokes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.log.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $log->revision) }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.log.fields.revision_helper') }}</span>
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