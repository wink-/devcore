@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.logger.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.loggers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="active" value="0">
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ old('active', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">{{ trans('cruds.logger.fields.active') }}</label>
                </div>
                @if($errors->has('active'))
                    <span class="text-danger">{{ $errors->first('active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.logger.fields.active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.logger.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.logger.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.logger.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.logger.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logger_type_id">{{ trans('cruds.logger.fields.logger_type') }}</label>
                <select class="form-control select2 {{ $errors->has('logger_type') ? 'is-invalid' : '' }}" name="logger_type_id" id="logger_type_id">
                    @foreach($logger_types as $id => $logger_type)
                        <option value="{{ $id }}" {{ old('logger_type_id') == $id ? 'selected' : '' }}>{{ $logger_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('logger_type'))
                    <span class="text-danger">{{ $errors->first('logger_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.logger.fields.logger_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ip_address">{{ trans('cruds.logger.fields.ip_address') }}</label>
                <input class="form-control {{ $errors->has('ip_address') ? 'is-invalid' : '' }}" type="text" name="ip_address" id="ip_address" value="{{ old('ip_address', '') }}">
                @if($errors->has('ip_address'))
                    <span class="text-danger">{{ $errors->first('ip_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.logger.fields.ip_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="port">{{ trans('cruds.logger.fields.port') }}</label>
                <input class="form-control {{ $errors->has('port') ? 'is-invalid' : '' }}" type="number" name="port" id="port" value="{{ old('port', '') }}" step="1">
                @if($errors->has('port'))
                    <span class="text-danger">{{ $errors->first('port') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.logger.fields.port_helper') }}</span>
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