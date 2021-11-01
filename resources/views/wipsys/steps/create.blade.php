@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.step.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.steps.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="code">{{ trans('cruds.step.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}">
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.step.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.step.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.step.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('equipment_hours') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="equipment_hours" value="0">
                    <input class="form-check-input" type="checkbox" name="equipment_hours" id="equipment_hours" value="1" {{ old('equipment_hours', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="equipment_hours">{{ trans('cruds.step.fields.equipment_hours') }}</label>
                </div>
                @if($errors->has('equipment_hours'))
                    <span class="text-danger">{{ $errors->first('equipment_hours') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.step.fields.equipment_hours_helper') }}</span>
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