@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.validation.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("pacsys.validations.update", [$validation->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="validation_text">{{ trans('cruds.validation.fields.validation_text') }}</label>
                <input class="form-control {{ $errors->has('validation_text') ? 'is-invalid' : '' }}" type="text" name="validation_text" id="validation_text" value="{{ old('validation_text', $validation->validation_text) }}">
                @if($errors->has('validation_text'))
                    <span class="text-danger">{{ $errors->first('validation_text') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.validation.fields.validation_text_helper') }}</span>
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