@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.unit.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.units.update", [$unit->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="code">{{ trans('cruds.unit.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $unit->code) }}">
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.unit.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.unit.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $unit->description) }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.unit.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_singular">{{ trans('cruds.unit.fields.name_singular') }}</label>
                <input class="form-control {{ $errors->has('name_singular') ? 'is-invalid' : '' }}" type="text" name="name_singular" id="name_singular" value="{{ old('name_singular', $unit->name_singular) }}">
                @if($errors->has('name_singular'))
                    <span class="text-danger">{{ $errors->first('name_singular') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.unit.fields.name_singular_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_plural">{{ trans('cruds.unit.fields.name_plural') }}</label>
                <input class="form-control {{ $errors->has('name_plural') ? 'is-invalid' : '' }}" type="text" name="name_plural" id="name_plural" value="{{ old('name_plural', $unit->name_plural) }}">
                @if($errors->has('name_plural'))
                    <span class="text-danger">{{ $errors->first('name_plural') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.unit.fields.name_plural_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $unit->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.unit.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.unit.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.unit.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $unit->revision) }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.unit.fields.revision_helper') }}</span>
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