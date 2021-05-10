@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.form.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.forms.update", [$form->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.form.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $form->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.form.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.form.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $form->description) }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.form.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_type">{{ trans('cruds.form.fields.form_type') }}</label>
                <input class="form-control {{ $errors->has('form_type') ? 'is-invalid' : '' }}" type="text" name="form_type" id="form_type" value="{{ old('form_type', $form->form_type) }}">
                @if($errors->has('form_type'))
                    <span class="text-danger">{{ $errors->first('form_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.form.fields.form_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_stamp">{{ trans('cruds.form.fields.time_stamp') }}</label>
                <input class="form-control datetime {{ $errors->has('time_stamp') ? 'is-invalid' : '' }}" type="text" name="time_stamp" id="time_stamp" value="{{ old('time_stamp', $form->time_stamp) }}">
                @if($errors->has('time_stamp'))
                    <span class="text-danger">{{ $errors->first('time_stamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.form.fields.time_stamp_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archived') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archived" value="0">
                    <input class="form-check-input" type="checkbox" name="archived" id="archived" value="1" {{ $form->archived || old('archived', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archived">{{ trans('cruds.form.fields.archived') }}</label>
                </div>
                @if($errors->has('archived'))
                    <span class="text-danger">{{ $errors->first('archived') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.form.fields.archived_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.form.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="text" name="revision" id="revision" value="{{ old('revision', $form->revision) }}">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.form.fields.revision_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="analysis_procedure">{{ trans('cruds.form.fields.analysis_procedure') }}</label>
                <input class="form-control {{ $errors->has('analysis_procedure') ? 'is-invalid' : '' }}" type="text" name="analysis_procedure" id="analysis_procedure" value="{{ old('analysis_procedure', $form->analysis_procedure) }}">
                @if($errors->has('analysis_procedure'))
                    <span class="text-danger">{{ $errors->first('analysis_procedure') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.form.fields.analysis_procedure_helper') }}</span>
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