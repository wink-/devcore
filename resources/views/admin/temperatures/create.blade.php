@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.temperature.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.temperatures.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="record_id">{{ trans('cruds.temperature.fields.record') }}</label>
                <select class="form-control select2 {{ $errors->has('record') ? 'is-invalid' : '' }}" name="record_id" id="record_id">
                    @foreach($records as $id => $record)
                        <option value="{{ $id }}" {{ old('record_id') == $id ? 'selected' : '' }}>{{ $record }}</option>
                    @endforeach
                </select>
                @if($errors->has('record'))
                    <span class="text-danger">{{ $errors->first('record') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.temperature.fields.record_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="temperature">{{ trans('cruds.temperature.fields.temperature') }}</label>
                <input class="form-control {{ $errors->has('temperature') ? 'is-invalid' : '' }}" type="number" name="temperature" id="temperature" value="{{ old('temperature', '') }}" step="1">
                @if($errors->has('temperature'))
                    <span class="text-danger">{{ $errors->first('temperature') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.temperature.fields.temperature_helper') }}</span>
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