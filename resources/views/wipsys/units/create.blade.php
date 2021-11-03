@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.unit.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("wipsys.units.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="code">{{ trans('cruds.unit.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}">
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.unit.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.unit.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.unit.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_singular">{{ trans('cruds.unit.fields.name_singular') }}</label>
                <input class="form-control {{ $errors->has('name_singular') ? 'is-invalid' : '' }}" type="text" name="name_singular" id="name_singular" value="{{ old('name_singular', '') }}">
                @if($errors->has('name_singular'))
                    <span class="text-danger">{{ $errors->first('name_singular') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.unit.fields.name_singular_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_plural">{{ trans('cruds.unit.fields.name_plural') }}</label>
                <input class="form-control {{ $errors->has('name_plural') ? 'is-invalid' : '' }}" type="text" name="name_plural" id="name_plural" value="{{ old('name_plural', '') }}">
                @if($errors->has('name_plural'))
                    <span class="text-danger">{{ $errors->first('name_plural') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.unit.fields.name_plural_helper') }}</span>
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