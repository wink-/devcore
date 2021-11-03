@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.qualitycheck.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("wipsys.qualitychecks.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="description">{{ trans('cruds.qualitycheck.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualitycheck.fields.description_helper') }}</span>
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