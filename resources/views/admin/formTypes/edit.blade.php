@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.formType.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.form-types.update", [$formType->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="form_type">{{ trans('cruds.formType.fields.form_type') }}</label>
                <input class="form-control {{ $errors->has('form_type') ? 'is-invalid' : '' }}" type="text" name="form_type" id="form_type" value="{{ old('form_type', $formType->form_type) }}">
                @if($errors->has('form_type'))
                    <span class="text-danger">{{ $errors->first('form_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formType.fields.form_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.formType.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $formType->description) }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formType.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_stamp">{{ trans('cruds.formType.fields.time_stamp') }}</label>
                <input class="form-control datetime {{ $errors->has('time_stamp') ? 'is-invalid' : '' }}" type="text" name="time_stamp" id="time_stamp" value="{{ old('time_stamp', $formType->time_stamp) }}">
                @if($errors->has('time_stamp'))
                    <span class="text-danger">{{ $errors->first('time_stamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formType.fields.time_stamp_helper') }}</span>
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