@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.volt.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("processdata.volts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="record_id">{{ trans('cruds.volt.fields.record') }}</label>
                <select class="form-control select2 {{ $errors->has('record') ? 'is-invalid' : '' }}" name="record_id" id="record_id">
                    @foreach($records as $id => $record)
                        <option value="{{ $id }}" {{ old('record_id') == $id ? 'selected' : '' }}>{{ $record }}</option>
                    @endforeach
                </select>
                @if($errors->has('record'))
                    <span class="text-danger">{{ $errors->first('record') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.volt.fields.record_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="volt">{{ trans('cruds.volt.fields.volt') }}</label>
                <input class="form-control {{ $errors->has('volt') ? 'is-invalid' : '' }}" type="number" name="volt" id="volt" value="{{ old('volt', '') }}" step="0.1">
                @if($errors->has('volt'))
                    <span class="text-danger">{{ $errors->first('volt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.volt.fields.volt_helper') }}</span>
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