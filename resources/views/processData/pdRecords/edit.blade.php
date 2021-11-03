@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit {{ trans('cruds.pdRecord.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("processdata.pd-records.update", [$pdRecord->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="active" value="0">
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ $pdRecord->active || old('active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">{{ trans('cruds.pdRecord.fields.active') }}</label>
                </div>
                @if($errors->has('active'))
                    <span class="text-danger">{{ $errors->first('active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pdRecord.fields.active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.pdRecord.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $pdRecord->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pdRecord.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logger_id">{{ trans('cruds.pdRecord.fields.logger') }}</label>
                <select class="form-control select2 {{ $errors->has('logger') ? 'is-invalid' : '' }}" name="logger_id" id="logger_id">
                    @foreach($loggers as $id => $logger)
                        <option value="{{ $id }}" {{ (old('logger_id') ? old('logger_id') : $pdRecord->logger->id ?? '') == $id ? 'selected' : '' }}>{{ $logger }}</option>
                    @endforeach
                </select>
                @if($errors->has('logger'))
                    <span class="text-danger">{{ $errors->first('logger') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pdRecord.fields.logger_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="record_type_id">{{ trans('cruds.pdRecord.fields.record_type') }}</label>
                <select class="form-control select2 {{ $errors->has('record_type') ? 'is-invalid' : '' }}" name="record_type_id" id="record_type_id">
                    @foreach($record_types as $id => $record_type)
                        <option value="{{ $id }}" {{ (old('record_type_id') ? old('record_type_id') : $pdRecord->record_type->id ?? '') == $id ? 'selected' : '' }}>{{ $record_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('record_type'))
                    <span class="text-danger">{{ $errors->first('record_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pdRecord.fields.record_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="command">{{ trans('cruds.pdRecord.fields.command') }}</label>
                <input class="form-control {{ $errors->has('command') ? 'is-invalid' : '' }}" type="text" name="command" id="command" value="{{ old('command', $pdRecord->command) }}">
                @if($errors->has('command'))
                    <span class="text-danger">{{ $errors->first('command') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pdRecord.fields.command_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="multiplier">{{ trans('cruds.pdRecord.fields.multiplier') }}</label>
                <input class="form-control {{ $errors->has('multiplier') ? 'is-invalid' : '' }}" type="number" name="multiplier" id="multiplier" value="{{ old('multiplier', $pdRecord->multiplier) }}" step="0.0001">
                @if($errors->has('multiplier'))
                    <span class="text-danger">{{ $errors->first('multiplier') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pdRecord.fields.multiplier_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.pdRecord.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $pdRecord->description) }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pdRecord.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_id">{{ trans('cruds.pdRecord.fields.unit') }}</label>
                <select class="form-control select2 {{ $errors->has('unit') ? 'is-invalid' : '' }}" name="unit_id" id="unit_id">
                    @foreach($units as $id => $unit)
                        <option value="{{ $id }}" {{ (old('unit_id') ? old('unit_id') : $pdRecord->unit->id ?? '') == $id ? 'selected' : '' }}>{{ $unit }}</option>
                    @endforeach
                </select>
                @if($errors->has('unit'))
                    <span class="text-danger">{{ $errors->first('unit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pdRecord.fields.unit_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="graph_y_lower">{{ trans('cruds.pdRecord.fields.graph_y_lower') }}</label>
                <input class="form-control {{ $errors->has('graph_y_lower') ? 'is-invalid' : '' }}" type="number" name="graph_y_lower" id="graph_y_lower" value="{{ old('graph_y_lower', $pdRecord->graph_y_lower) }}" step="1">
                @if($errors->has('graph_y_lower'))
                    <span class="text-danger">{{ $errors->first('graph_y_lower') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pdRecord.fields.graph_y_lower_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="graph_y_upper">{{ trans('cruds.pdRecord.fields.graph_y_upper') }}</label>
                <input class="form-control {{ $errors->has('graph_y_upper') ? 'is-invalid' : '' }}" type="number" name="graph_y_upper" id="graph_y_upper" value="{{ old('graph_y_upper', $pdRecord->graph_y_upper) }}" step="1">
                @if($errors->has('graph_y_upper'))
                    <span class="text-danger">{{ $errors->first('graph_y_upper') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pdRecord.fields.graph_y_upper_helper') }}</span>
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