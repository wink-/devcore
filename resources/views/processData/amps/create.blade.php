@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.amp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.amps.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="record_id">{{ trans('cruds.amp.fields.record') }}</label>
                <select class="form-control select2 {{ $errors->has('record') ? 'is-invalid' : '' }}" name="record_id" id="record_id">
                    @foreach($records as $id => $record)
                        <option value="{{ $id }}" {{ old('record_id') == $id ? 'selected' : '' }}>{{ $record }}</option>
                    @endforeach
                </select>
                @if($errors->has('record'))
                    <span class="text-danger">{{ $errors->first('record') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.amp.fields.record_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amp">{{ trans('cruds.amp.fields.amp') }}</label>
                <input class="form-control {{ $errors->has('amp') ? 'is-invalid' : '' }}" type="number" name="amp" id="amp" value="{{ old('amp', '') }}" step="1">
                @if($errors->has('amp'))
                    <span class="text-danger">{{ $errors->first('amp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.amp.fields.amp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amp_minute">{{ trans('cruds.amp.fields.amp_minute') }}</label>
                <input class="form-control {{ $errors->has('amp_minute') ? 'is-invalid' : '' }}" type="number" name="amp_minute" id="amp_minute" value="{{ old('amp_minute', '') }}" step="1">
                @if($errors->has('amp_minute'))
                    <span class="text-danger">{{ $errors->first('amp_minute') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.amp.fields.amp_minute_helper') }}</span>
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