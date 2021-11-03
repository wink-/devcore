@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit {{ trans('cruds.qualitycheck.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("wipsys.qualitychecks.update", [$qualitycheck->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="description">{{ trans('cruds.qualitycheck.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $qualitycheck->description) }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualitycheck.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $qualitycheck->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.qualitycheck.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualitycheck.fields.archive_helper') }}</span>
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