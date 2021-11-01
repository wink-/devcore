@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.workgroup.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.workgroups.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.workgroup.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workgroup.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="process_code">{{ trans('cruds.workgroup.fields.process_code') }}</label>
                <input class="form-control {{ $errors->has('process_code') ? 'is-invalid' : '' }}" type="text" name="process_code" id="process_code" value="{{ old('process_code', '') }}">
                @if($errors->has('process_code'))
                    <span class="text-danger">{{ $errors->first('process_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workgroup.fields.process_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="method_code">{{ trans('cruds.workgroup.fields.method_code') }}</label>
                <input class="form-control {{ $errors->has('method_code') ? 'is-invalid' : '' }}" type="text" name="method_code" id="method_code" value="{{ old('method_code', '') }}">
                @if($errors->has('method_code'))
                    <span class="text-danger">{{ $errors->first('method_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workgroup.fields.method_code_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('method_default') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="method_default" value="0">
                    <input class="form-check-input" type="checkbox" name="method_default" id="method_default" value="1" {{ old('method_default', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="method_default">{{ trans('cruds.workgroup.fields.method_default') }}</label>
                </div>
                @if($errors->has('method_default'))
                    <span class="text-danger">{{ $errors->first('method_default') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workgroup.fields.method_default_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="step_code">{{ trans('cruds.workgroup.fields.step_code') }}</label>
                <input class="form-control {{ $errors->has('step_code') ? 'is-invalid' : '' }}" type="text" name="step_code" id="step_code" value="{{ old('step_code', '') }}">
                @if($errors->has('step_code'))
                    <span class="text-danger">{{ $errors->first('step_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workgroup.fields.step_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.workgroup.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.workgroup.fields.revision_helper') }}</span>
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