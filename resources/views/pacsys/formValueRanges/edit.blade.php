@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.formValueRange.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("pacsys.form-value-ranges.update", [$formValueRange->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.formValueRange.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $formValueRange->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_name">{{ trans('cruds.formValueRange.fields.form_name') }}</label>
                <input class="form-control {{ $errors->has('form_name') ? 'is-invalid' : '' }}" type="text" name="form_name" id="form_name" value="{{ old('form_name', $formValueRange->form_name) }}">
                @if($errors->has('form_name'))
                    <span class="text-danger">{{ $errors->first('form_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.form_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_1">{{ trans('cruds.formValueRange.fields.min_1') }}</label>
                <input class="form-control {{ $errors->has('min_1') ? 'is-invalid' : '' }}" type="text" name="min_1" id="min_1" value="{{ old('min_1', $formValueRange->min_1) }}">
                @if($errors->has('min_1'))
                    <span class="text-danger">{{ $errors->first('min_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_1">{{ trans('cruds.formValueRange.fields.max_1') }}</label>
                <input class="form-control {{ $errors->has('max_1') ? 'is-invalid' : '' }}" type="text" name="max_1" id="max_1" value="{{ old('max_1', $formValueRange->max_1) }}">
                @if($errors->has('max_1'))
                    <span class="text-danger">{{ $errors->first('max_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_2">{{ trans('cruds.formValueRange.fields.min_2') }}</label>
                <input class="form-control {{ $errors->has('min_2') ? 'is-invalid' : '' }}" type="text" name="min_2" id="min_2" value="{{ old('min_2', $formValueRange->min_2) }}">
                @if($errors->has('min_2'))
                    <span class="text-danger">{{ $errors->first('min_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_2">{{ trans('cruds.formValueRange.fields.max_2') }}</label>
                <input class="form-control {{ $errors->has('max_2') ? 'is-invalid' : '' }}" type="text" name="max_2" id="max_2" value="{{ old('max_2', $formValueRange->max_2) }}">
                @if($errors->has('max_2'))
                    <span class="text-danger">{{ $errors->first('max_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_3">{{ trans('cruds.formValueRange.fields.min_3') }}</label>
                <input class="form-control {{ $errors->has('min_3') ? 'is-invalid' : '' }}" type="text" name="min_3" id="min_3" value="{{ old('min_3', $formValueRange->min_3) }}">
                @if($errors->has('min_3'))
                    <span class="text-danger">{{ $errors->first('min_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_3">{{ trans('cruds.formValueRange.fields.max_3') }}</label>
                <input class="form-control {{ $errors->has('max_3') ? 'is-invalid' : '' }}" type="text" name="max_3" id="max_3" value="{{ old('max_3', $formValueRange->max_3) }}">
                @if($errors->has('max_3'))
                    <span class="text-danger">{{ $errors->first('max_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_4">{{ trans('cruds.formValueRange.fields.min_4') }}</label>
                <input class="form-control {{ $errors->has('min_4') ? 'is-invalid' : '' }}" type="text" name="min_4" id="min_4" value="{{ old('min_4', $formValueRange->min_4) }}">
                @if($errors->has('min_4'))
                    <span class="text-danger">{{ $errors->first('min_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_4">{{ trans('cruds.formValueRange.fields.max_4') }}</label>
                <input class="form-control {{ $errors->has('max_4') ? 'is-invalid' : '' }}" type="text" name="max_4" id="max_4" value="{{ old('max_4', $formValueRange->max_4) }}">
                @if($errors->has('max_4'))
                    <span class="text-danger">{{ $errors->first('max_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_5">{{ trans('cruds.formValueRange.fields.min_5') }}</label>
                <input class="form-control {{ $errors->has('min_5') ? 'is-invalid' : '' }}" type="text" name="min_5" id="min_5" value="{{ old('min_5', $formValueRange->min_5) }}">
                @if($errors->has('min_5'))
                    <span class="text-danger">{{ $errors->first('min_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_5">{{ trans('cruds.formValueRange.fields.max_5') }}</label>
                <input class="form-control {{ $errors->has('max_5') ? 'is-invalid' : '' }}" type="text" name="max_5" id="max_5" value="{{ old('max_5', $formValueRange->max_5) }}">
                @if($errors->has('max_5'))
                    <span class="text-danger">{{ $errors->first('max_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_6">{{ trans('cruds.formValueRange.fields.min_6') }}</label>
                <input class="form-control {{ $errors->has('min_6') ? 'is-invalid' : '' }}" type="text" name="min_6" id="min_6" value="{{ old('min_6', $formValueRange->min_6) }}">
                @if($errors->has('min_6'))
                    <span class="text-danger">{{ $errors->first('min_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_6">{{ trans('cruds.formValueRange.fields.max_6') }}</label>
                <input class="form-control {{ $errors->has('max_6') ? 'is-invalid' : '' }}" type="text" name="max_6" id="max_6" value="{{ old('max_6', $formValueRange->max_6) }}">
                @if($errors->has('max_6'))
                    <span class="text-danger">{{ $errors->first('max_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_7">{{ trans('cruds.formValueRange.fields.min_7') }}</label>
                <input class="form-control {{ $errors->has('min_7') ? 'is-invalid' : '' }}" type="text" name="min_7" id="min_7" value="{{ old('min_7', $formValueRange->min_7) }}">
                @if($errors->has('min_7'))
                    <span class="text-danger">{{ $errors->first('min_7') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_7_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_7">{{ trans('cruds.formValueRange.fields.max_7') }}</label>
                <input class="form-control {{ $errors->has('max_7') ? 'is-invalid' : '' }}" type="text" name="max_7" id="max_7" value="{{ old('max_7', $formValueRange->max_7) }}">
                @if($errors->has('max_7'))
                    <span class="text-danger">{{ $errors->first('max_7') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_7_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_8">{{ trans('cruds.formValueRange.fields.min_8') }}</label>
                <input class="form-control {{ $errors->has('min_8') ? 'is-invalid' : '' }}" type="text" name="min_8" id="min_8" value="{{ old('min_8', $formValueRange->min_8) }}">
                @if($errors->has('min_8'))
                    <span class="text-danger">{{ $errors->first('min_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_8_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_8">{{ trans('cruds.formValueRange.fields.max_8') }}</label>
                <input class="form-control {{ $errors->has('max_8') ? 'is-invalid' : '' }}" type="text" name="max_8" id="max_8" value="{{ old('max_8', $formValueRange->max_8) }}">
                @if($errors->has('max_8'))
                    <span class="text-danger">{{ $errors->first('max_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_8_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_9">{{ trans('cruds.formValueRange.fields.min_9') }}</label>
                <input class="form-control {{ $errors->has('min_9') ? 'is-invalid' : '' }}" type="text" name="min_9" id="min_9" value="{{ old('min_9', $formValueRange->min_9) }}">
                @if($errors->has('min_9'))
                    <span class="text-danger">{{ $errors->first('min_9') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_9_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_9">{{ trans('cruds.formValueRange.fields.max_9') }}</label>
                <input class="form-control {{ $errors->has('max_9') ? 'is-invalid' : '' }}" type="text" name="max_9" id="max_9" value="{{ old('max_9', $formValueRange->max_9) }}">
                @if($errors->has('max_9'))
                    <span class="text-danger">{{ $errors->first('max_9') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_9_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_10">{{ trans('cruds.formValueRange.fields.min_10') }}</label>
                <input class="form-control {{ $errors->has('min_10') ? 'is-invalid' : '' }}" type="text" name="min_10" id="min_10" value="{{ old('min_10', $formValueRange->min_10) }}">
                @if($errors->has('min_10'))
                    <span class="text-danger">{{ $errors->first('min_10') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_10">{{ trans('cruds.formValueRange.fields.max_10') }}</label>
                <input class="form-control {{ $errors->has('max_10') ? 'is-invalid' : '' }}" type="text" name="max_10" id="max_10" value="{{ old('max_10', $formValueRange->max_10) }}">
                @if($errors->has('max_10'))
                    <span class="text-danger">{{ $errors->first('max_10') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_11">{{ trans('cruds.formValueRange.fields.min_11') }}</label>
                <input class="form-control {{ $errors->has('min_11') ? 'is-invalid' : '' }}" type="text" name="min_11" id="min_11" value="{{ old('min_11', $formValueRange->min_11) }}">
                @if($errors->has('min_11'))
                    <span class="text-danger">{{ $errors->first('min_11') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_11">{{ trans('cruds.formValueRange.fields.max_11') }}</label>
                <input class="form-control {{ $errors->has('max_11') ? 'is-invalid' : '' }}" type="text" name="max_11" id="max_11" value="{{ old('max_11', $formValueRange->max_11) }}">
                @if($errors->has('max_11'))
                    <span class="text-danger">{{ $errors->first('max_11') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_12">{{ trans('cruds.formValueRange.fields.min_12') }}</label>
                <input class="form-control {{ $errors->has('min_12') ? 'is-invalid' : '' }}" type="text" name="min_12" id="min_12" value="{{ old('min_12', $formValueRange->min_12) }}">
                @if($errors->has('min_12'))
                    <span class="text-danger">{{ $errors->first('min_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_12">{{ trans('cruds.formValueRange.fields.max_12') }}</label>
                <input class="form-control {{ $errors->has('max_12') ? 'is-invalid' : '' }}" type="text" name="max_12" id="max_12" value="{{ old('max_12', $formValueRange->max_12) }}">
                @if($errors->has('max_12'))
                    <span class="text-danger">{{ $errors->first('max_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_13">{{ trans('cruds.formValueRange.fields.min_13') }}</label>
                <input class="form-control {{ $errors->has('min_13') ? 'is-invalid' : '' }}" type="text" name="min_13" id="min_13" value="{{ old('min_13', $formValueRange->min_13) }}">
                @if($errors->has('min_13'))
                    <span class="text-danger">{{ $errors->first('min_13') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_13_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_13">{{ trans('cruds.formValueRange.fields.max_13') }}</label>
                <input class="form-control {{ $errors->has('max_13') ? 'is-invalid' : '' }}" type="text" name="max_13" id="max_13" value="{{ old('max_13', $formValueRange->max_13) }}">
                @if($errors->has('max_13'))
                    <span class="text-danger">{{ $errors->first('max_13') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_13_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_14">{{ trans('cruds.formValueRange.fields.min_14') }}</label>
                <input class="form-control {{ $errors->has('min_14') ? 'is-invalid' : '' }}" type="text" name="min_14" id="min_14" value="{{ old('min_14', $formValueRange->min_14) }}">
                @if($errors->has('min_14'))
                    <span class="text-danger">{{ $errors->first('min_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_14_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_14">{{ trans('cruds.formValueRange.fields.max_14') }}</label>
                <input class="form-control {{ $errors->has('max_14') ? 'is-invalid' : '' }}" type="text" name="max_14" id="max_14" value="{{ old('max_14', $formValueRange->max_14) }}">
                @if($errors->has('max_14'))
                    <span class="text-danger">{{ $errors->first('max_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_14_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_15">{{ trans('cruds.formValueRange.fields.min_15') }}</label>
                <input class="form-control {{ $errors->has('min_15') ? 'is-invalid' : '' }}" type="text" name="min_15" id="min_15" value="{{ old('min_15', $formValueRange->min_15) }}">
                @if($errors->has('min_15'))
                    <span class="text-danger">{{ $errors->first('min_15') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_15_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_15">{{ trans('cruds.formValueRange.fields.max_15') }}</label>
                <input class="form-control {{ $errors->has('max_15') ? 'is-invalid' : '' }}" type="text" name="max_15" id="max_15" value="{{ old('max_15', $formValueRange->max_15) }}">
                @if($errors->has('max_15'))
                    <span class="text-danger">{{ $errors->first('max_15') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_15_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_16">{{ trans('cruds.formValueRange.fields.min_16') }}</label>
                <input class="form-control {{ $errors->has('min_16') ? 'is-invalid' : '' }}" type="text" name="min_16" id="min_16" value="{{ old('min_16', $formValueRange->min_16) }}">
                @if($errors->has('min_16'))
                    <span class="text-danger">{{ $errors->first('min_16') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_16_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_16">{{ trans('cruds.formValueRange.fields.max_16') }}</label>
                <input class="form-control {{ $errors->has('max_16') ? 'is-invalid' : '' }}" type="text" name="max_16" id="max_16" value="{{ old('max_16', $formValueRange->max_16) }}">
                @if($errors->has('max_16'))
                    <span class="text-danger">{{ $errors->first('max_16') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_16_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_17">{{ trans('cruds.formValueRange.fields.min_17') }}</label>
                <input class="form-control {{ $errors->has('min_17') ? 'is-invalid' : '' }}" type="text" name="min_17" id="min_17" value="{{ old('min_17', $formValueRange->min_17) }}">
                @if($errors->has('min_17'))
                    <span class="text-danger">{{ $errors->first('min_17') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_17_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_17">{{ trans('cruds.formValueRange.fields.max_17') }}</label>
                <input class="form-control {{ $errors->has('max_17') ? 'is-invalid' : '' }}" type="text" name="max_17" id="max_17" value="{{ old('max_17', $formValueRange->max_17) }}">
                @if($errors->has('max_17'))
                    <span class="text-danger">{{ $errors->first('max_17') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_17_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_18">{{ trans('cruds.formValueRange.fields.min_18') }}</label>
                <input class="form-control {{ $errors->has('min_18') ? 'is-invalid' : '' }}" type="text" name="min_18" id="min_18" value="{{ old('min_18', $formValueRange->min_18) }}">
                @if($errors->has('min_18'))
                    <span class="text-danger">{{ $errors->first('min_18') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_18_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_18">{{ trans('cruds.formValueRange.fields.max_18') }}</label>
                <input class="form-control {{ $errors->has('max_18') ? 'is-invalid' : '' }}" type="text" name="max_18" id="max_18" value="{{ old('max_18', $formValueRange->max_18) }}">
                @if($errors->has('max_18'))
                    <span class="text-danger">{{ $errors->first('max_18') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_18_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_19">{{ trans('cruds.formValueRange.fields.min_19') }}</label>
                <input class="form-control {{ $errors->has('min_19') ? 'is-invalid' : '' }}" type="text" name="min_19" id="min_19" value="{{ old('min_19', $formValueRange->min_19) }}">
                @if($errors->has('min_19'))
                    <span class="text-danger">{{ $errors->first('min_19') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_19_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_19">{{ trans('cruds.formValueRange.fields.max_19') }}</label>
                <input class="form-control {{ $errors->has('max_19') ? 'is-invalid' : '' }}" type="text" name="max_19" id="max_19" value="{{ old('max_19', $formValueRange->max_19) }}">
                @if($errors->has('max_19'))
                    <span class="text-danger">{{ $errors->first('max_19') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_19_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="min_20">{{ trans('cruds.formValueRange.fields.min_20') }}</label>
                <input class="form-control {{ $errors->has('min_20') ? 'is-invalid' : '' }}" type="text" name="min_20" id="min_20" value="{{ old('min_20', $formValueRange->min_20) }}">
                @if($errors->has('min_20'))
                    <span class="text-danger">{{ $errors->first('min_20') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.min_20_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_20">{{ trans('cruds.formValueRange.fields.max_20') }}</label>
                <input class="form-control {{ $errors->has('max_20') ? 'is-invalid' : '' }}" type="text" name="max_20" id="max_20" value="{{ old('max_20', $formValueRange->max_20) }}">
                @if($errors->has('max_20'))
                    <span class="text-danger">{{ $errors->first('max_20') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.max_20_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tank">{{ trans('cruds.formValueRange.fields.tank') }}</label>
                <input class="form-control {{ $errors->has('tank') ? 'is-invalid' : '' }}" type="text" name="tank" id="tank" value="{{ old('tank', $formValueRange->tank) }}">
                @if($errors->has('tank'))
                    <span class="text-danger">{{ $errors->first('tank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.tank_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_stamp">{{ trans('cruds.formValueRange.fields.time_stamp') }}</label>
                <input class="form-control datetime {{ $errors->has('time_stamp') ? 'is-invalid' : '' }}" type="text" name="time_stamp" id="time_stamp" value="{{ old('time_stamp', $formValueRange->time_stamp) }}">
                @if($errors->has('time_stamp'))
                    <span class="text-danger">{{ $errors->first('time_stamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueRange.fields.time_stamp_helper') }}</span>
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