@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.analysisNew.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.analysis-news.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="record_name">{{ trans('cruds.analysisNew.fields.record_name') }}</label>
                <input class="form-control {{ $errors->has('record_name') ? 'is-invalid' : '' }}" type="text" name="record_name" id="record_name" value="{{ old('record_name', '') }}">
                @if($errors->has('record_name'))
                    <span class="text-danger">{{ $errors->first('record_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.record_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_name">{{ trans('cruds.analysisNew.fields.form_name') }}</label>
                <input class="form-control {{ $errors->has('form_name') ? 'is-invalid' : '' }}" type="text" name="form_name" id="form_name" value="{{ old('form_name', '') }}">
                @if($errors->has('form_name'))
                    <span class="text-danger">{{ $errors->first('form_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.form_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date">{{ trans('cruds.analysisNew.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date') }}">
                @if($errors->has('date'))
                    <span class="text-danger">{{ $errors->first('date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_1">{{ trans('cruds.analysisNew.fields.value_1') }}</label>
                <input class="form-control {{ $errors->has('value_1') ? 'is-invalid' : '' }}" type="text" name="value_1" id="value_1" value="{{ old('value_1', '') }}">
                @if($errors->has('value_1'))
                    <span class="text-danger">{{ $errors->first('value_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_2">{{ trans('cruds.analysisNew.fields.value_2') }}</label>
                <input class="form-control {{ $errors->has('value_2') ? 'is-invalid' : '' }}" type="text" name="value_2" id="value_2" value="{{ old('value_2', '') }}">
                @if($errors->has('value_2'))
                    <span class="text-danger">{{ $errors->first('value_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_3">{{ trans('cruds.analysisNew.fields.value_3') }}</label>
                <input class="form-control {{ $errors->has('value_3') ? 'is-invalid' : '' }}" type="text" name="value_3" id="value_3" value="{{ old('value_3', '') }}">
                @if($errors->has('value_3'))
                    <span class="text-danger">{{ $errors->first('value_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_4">{{ trans('cruds.analysisNew.fields.value_4') }}</label>
                <input class="form-control {{ $errors->has('value_4') ? 'is-invalid' : '' }}" type="text" name="value_4" id="value_4" value="{{ old('value_4', '') }}">
                @if($errors->has('value_4'))
                    <span class="text-danger">{{ $errors->first('value_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_5">{{ trans('cruds.analysisNew.fields.value_5') }}</label>
                <input class="form-control {{ $errors->has('value_5') ? 'is-invalid' : '' }}" type="text" name="value_5" id="value_5" value="{{ old('value_5', '') }}">
                @if($errors->has('value_5'))
                    <span class="text-danger">{{ $errors->first('value_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_6">{{ trans('cruds.analysisNew.fields.value_6') }}</label>
                <input class="form-control {{ $errors->has('value_6') ? 'is-invalid' : '' }}" type="text" name="value_6" id="value_6" value="{{ old('value_6', '') }}">
                @if($errors->has('value_6'))
                    <span class="text-danger">{{ $errors->first('value_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_7">{{ trans('cruds.analysisNew.fields.value_7') }}</label>
                <input class="form-control {{ $errors->has('value_7') ? 'is-invalid' : '' }}" type="text" name="value_7" id="value_7" value="{{ old('value_7', '') }}">
                @if($errors->has('value_7'))
                    <span class="text-danger">{{ $errors->first('value_7') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_7_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_8">{{ trans('cruds.analysisNew.fields.value_8') }}</label>
                <input class="form-control {{ $errors->has('value_8') ? 'is-invalid' : '' }}" type="text" name="value_8" id="value_8" value="{{ old('value_8', '') }}">
                @if($errors->has('value_8'))
                    <span class="text-danger">{{ $errors->first('value_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_8_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_9">{{ trans('cruds.analysisNew.fields.value_9') }}</label>
                <input class="form-control {{ $errors->has('value_9') ? 'is-invalid' : '' }}" type="text" name="value_9" id="value_9" value="{{ old('value_9', '') }}">
                @if($errors->has('value_9'))
                    <span class="text-danger">{{ $errors->first('value_9') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_9_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_10">{{ trans('cruds.analysisNew.fields.value_10') }}</label>
                <input class="form-control {{ $errors->has('value_10') ? 'is-invalid' : '' }}" type="text" name="value_10" id="value_10" value="{{ old('value_10', '') }}">
                @if($errors->has('value_10'))
                    <span class="text-danger">{{ $errors->first('value_10') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_11">{{ trans('cruds.analysisNew.fields.value_11') }}</label>
                <input class="form-control {{ $errors->has('value_11') ? 'is-invalid' : '' }}" type="text" name="value_11" id="value_11" value="{{ old('value_11', '') }}">
                @if($errors->has('value_11'))
                    <span class="text-danger">{{ $errors->first('value_11') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_12">{{ trans('cruds.analysisNew.fields.value_12') }}</label>
                <input class="form-control {{ $errors->has('value_12') ? 'is-invalid' : '' }}" type="text" name="value_12" id="value_12" value="{{ old('value_12', '') }}">
                @if($errors->has('value_12'))
                    <span class="text-danger">{{ $errors->first('value_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_13">{{ trans('cruds.analysisNew.fields.value_13') }}</label>
                <input class="form-control {{ $errors->has('value_13') ? 'is-invalid' : '' }}" type="text" name="value_13" id="value_13" value="{{ old('value_13', '') }}">
                @if($errors->has('value_13'))
                    <span class="text-danger">{{ $errors->first('value_13') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_13_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_14">{{ trans('cruds.analysisNew.fields.value_14') }}</label>
                <input class="form-control {{ $errors->has('value_14') ? 'is-invalid' : '' }}" type="text" name="value_14" id="value_14" value="{{ old('value_14', '') }}">
                @if($errors->has('value_14'))
                    <span class="text-danger">{{ $errors->first('value_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_14_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_15">{{ trans('cruds.analysisNew.fields.value_15') }}</label>
                <input class="form-control {{ $errors->has('value_15') ? 'is-invalid' : '' }}" type="text" name="value_15" id="value_15" value="{{ old('value_15', '') }}">
                @if($errors->has('value_15'))
                    <span class="text-danger">{{ $errors->first('value_15') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_15_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_16">{{ trans('cruds.analysisNew.fields.value_16') }}</label>
                <input class="form-control {{ $errors->has('value_16') ? 'is-invalid' : '' }}" type="text" name="value_16" id="value_16" value="{{ old('value_16', '') }}">
                @if($errors->has('value_16'))
                    <span class="text-danger">{{ $errors->first('value_16') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_16_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_17">{{ trans('cruds.analysisNew.fields.value_17') }}</label>
                <input class="form-control {{ $errors->has('value_17') ? 'is-invalid' : '' }}" type="text" name="value_17" id="value_17" value="{{ old('value_17', '') }}">
                @if($errors->has('value_17'))
                    <span class="text-danger">{{ $errors->first('value_17') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_17_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_18">{{ trans('cruds.analysisNew.fields.value_18') }}</label>
                <input class="form-control {{ $errors->has('value_18') ? 'is-invalid' : '' }}" type="text" name="value_18" id="value_18" value="{{ old('value_18', '') }}">
                @if($errors->has('value_18'))
                    <span class="text-danger">{{ $errors->first('value_18') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_18_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_19">{{ trans('cruds.analysisNew.fields.value_19') }}</label>
                <input class="form-control {{ $errors->has('value_19') ? 'is-invalid' : '' }}" type="text" name="value_19" id="value_19" value="{{ old('value_19', '') }}">
                @if($errors->has('value_19'))
                    <span class="text-danger">{{ $errors->first('value_19') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_19_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value_20">{{ trans('cruds.analysisNew.fields.value_20') }}</label>
                <input class="form-control {{ $errors->has('value_20') ? 'is-invalid' : '' }}" type="text" name="value_20" id="value_20" value="{{ old('value_20', '') }}">
                @if($errors->has('value_20'))
                    <span class="text-danger">{{ $errors->first('value_20') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.value_20_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tank">{{ trans('cruds.analysisNew.fields.tank') }}</label>
                <input class="form-control {{ $errors->has('tank') ? 'is-invalid' : '' }}" type="text" name="tank" id="tank" value="{{ old('tank', '') }}">
                @if($errors->has('tank'))
                    <span class="text-danger">{{ $errors->first('tank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.tank_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emp_code">{{ trans('cruds.analysisNew.fields.emp_code') }}</label>
                <input class="form-control {{ $errors->has('emp_code') ? 'is-invalid' : '' }}" type="text" name="emp_code" id="emp_code" value="{{ old('emp_code', '') }}">
                @if($errors->has('emp_code'))
                    <span class="text-danger">{{ $errors->first('emp_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.emp_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_stamp">{{ trans('cruds.analysisNew.fields.time_stamp') }}</label>
                <input class="form-control date {{ $errors->has('time_stamp') ? 'is-invalid' : '' }}" type="text" name="time_stamp" id="time_stamp" value="{{ old('time_stamp') }}">
                @if($errors->has('time_stamp'))
                    <span class="text-danger">{{ $errors->first('time_stamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.time_stamp_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('delete_visible') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="delete_visible" value="0">
                    <input class="form-check-input" type="checkbox" name="delete_visible" id="delete_visible" value="1" {{ old('delete_visible', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="delete_visible">{{ trans('cruds.analysisNew.fields.delete_visible') }}</label>
                </div>
                @if($errors->has('delete_visible'))
                    <span class="text-danger">{{ $errors->first('delete_visible') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.delete_visible_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="label">{{ trans('cruds.analysisNew.fields.label') }}</label>
                <input class="form-control {{ $errors->has('label') ? 'is-invalid' : '' }}" type="text" name="label" id="label" value="{{ old('label', '') }}">
                @if($errors->has('label'))
                    <span class="text-danger">{{ $errors->first('label') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.analysisNew.fields.label_helper') }}</span>
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