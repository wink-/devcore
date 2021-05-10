@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.record.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.records.update", [$record->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.record.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $record->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.record.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $record->description) }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_name">{{ trans('cruds.record.fields.form_name') }}</label>
                <input class="form-control {{ $errors->has('form_name') ? 'is-invalid' : '' }}" type="text" name="form_name" id="form_name" value="{{ old('form_name', $record->form_name) }}">
                @if($errors->has('form_name'))
                    <span class="text-danger">{{ $errors->first('form_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.form_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_type">{{ trans('cruds.record.fields.form_type') }}</label>
                <input class="form-control {{ $errors->has('form_type') ? 'is-invalid' : '' }}" type="text" name="form_type" id="form_type" value="{{ old('form_type', $record->form_type) }}">
                @if($errors->has('form_type'))
                    <span class="text-danger">{{ $errors->first('form_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.form_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="scope_name">{{ trans('cruds.record.fields.scope_name') }}</label>
                <input class="form-control {{ $errors->has('scope_name') ? 'is-invalid' : '' }}" type="text" name="scope_name" id="scope_name" value="{{ old('scope_name', $record->scope_name) }}">
                @if($errors->has('scope_name'))
                    <span class="text-danger">{{ $errors->first('scope_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.scope_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image">{{ trans('cruds.record.fields.image') }}</label>
                <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" type="text" name="image" id="image" value="{{ old('image', $record->image) }}">
                @if($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_stamp">{{ trans('cruds.record.fields.time_stamp') }}</label>
                <input class="form-control datetime {{ $errors->has('time_stamp') ? 'is-invalid' : '' }}" type="text" name="time_stamp" id="time_stamp" value="{{ old('time_stamp', $record->time_stamp) }}">
                @if($errors->has('time_stamp'))
                    <span class="text-danger">{{ $errors->first('time_stamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.time_stamp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="capacity_old">{{ trans('cruds.record.fields.capacity_old') }}</label>
                <input class="form-control {{ $errors->has('capacity_old') ? 'is-invalid' : '' }}" type="number" name="capacity_old" id="capacity_old" value="{{ old('capacity_old', $record->capacity_old) }}" step="1">
                @if($errors->has('capacity_old'))
                    <span class="text-danger">{{ $errors->first('capacity_old') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.capacity_old_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="capacity_unit">{{ trans('cruds.record.fields.capacity_unit') }}</label>
                <input class="form-control {{ $errors->has('capacity_unit') ? 'is-invalid' : '' }}" type="text" name="capacity_unit" id="capacity_unit" value="{{ old('capacity_unit', $record->capacity_unit) }}">
                @if($errors->has('capacity_unit'))
                    <span class="text-danger">{{ $errors->first('capacity_unit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.capacity_unit_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="capacity">{{ trans('cruds.record.fields.capacity') }}</label>
                <input class="form-control {{ $errors->has('capacity') ? 'is-invalid' : '' }}" type="number" name="capacity" id="capacity" value="{{ old('capacity', $record->capacity) }}" step="0.001">
                @if($errors->has('capacity'))
                    <span class="text-danger">{{ $errors->first('capacity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.capacity_helper') }}</span>
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