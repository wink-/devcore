@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.formValuePeriod.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("pacsys.form-value-periods.update", [$formValuePeriod->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.formValuePeriod.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $formValuePeriod->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_name">{{ trans('cruds.formValuePeriod.fields.form_name') }}</label>
                <input class="form-control {{ $errors->has('form_name') ? 'is-invalid' : '' }}" type="text" name="form_name" id="form_name" value="{{ old('form_name', $formValuePeriod->form_name) }}">
                @if($errors->has('form_name'))
                    <span class="text-danger">{{ $errors->first('form_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.form_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_1">{{ trans('cruds.formValuePeriod.fields.period_1') }}</label>
                <input class="form-control {{ $errors->has('period_1') ? 'is-invalid' : '' }}" type="text" name="period_1" id="period_1" value="{{ old('period_1', $formValuePeriod->period_1) }}">
                @if($errors->has('period_1'))
                    <span class="text-danger">{{ $errors->first('period_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_2">{{ trans('cruds.formValuePeriod.fields.period_2') }}</label>
                <input class="form-control {{ $errors->has('period_2') ? 'is-invalid' : '' }}" type="text" name="period_2" id="period_2" value="{{ old('period_2', $formValuePeriod->period_2) }}">
                @if($errors->has('period_2'))
                    <span class="text-danger">{{ $errors->first('period_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_3">{{ trans('cruds.formValuePeriod.fields.period_3') }}</label>
                <input class="form-control {{ $errors->has('period_3') ? 'is-invalid' : '' }}" type="text" name="period_3" id="period_3" value="{{ old('period_3', $formValuePeriod->period_3) }}">
                @if($errors->has('period_3'))
                    <span class="text-danger">{{ $errors->first('period_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_4">{{ trans('cruds.formValuePeriod.fields.period_4') }}</label>
                <input class="form-control {{ $errors->has('period_4') ? 'is-invalid' : '' }}" type="text" name="period_4" id="period_4" value="{{ old('period_4', $formValuePeriod->period_4) }}">
                @if($errors->has('period_4'))
                    <span class="text-danger">{{ $errors->first('period_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_5">{{ trans('cruds.formValuePeriod.fields.period_5') }}</label>
                <input class="form-control {{ $errors->has('period_5') ? 'is-invalid' : '' }}" type="text" name="period_5" id="period_5" value="{{ old('period_5', $formValuePeriod->period_5) }}">
                @if($errors->has('period_5'))
                    <span class="text-danger">{{ $errors->first('period_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_6">{{ trans('cruds.formValuePeriod.fields.period_6') }}</label>
                <input class="form-control {{ $errors->has('period_6') ? 'is-invalid' : '' }}" type="text" name="period_6" id="period_6" value="{{ old('period_6', $formValuePeriod->period_6) }}">
                @if($errors->has('period_6'))
                    <span class="text-danger">{{ $errors->first('period_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_7">{{ trans('cruds.formValuePeriod.fields.period_7') }}</label>
                <input class="form-control {{ $errors->has('period_7') ? 'is-invalid' : '' }}" type="text" name="period_7" id="period_7" value="{{ old('period_7', $formValuePeriod->period_7) }}">
                @if($errors->has('period_7'))
                    <span class="text-danger">{{ $errors->first('period_7') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_7_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_8">{{ trans('cruds.formValuePeriod.fields.period_8') }}</label>
                <input class="form-control {{ $errors->has('period_8') ? 'is-invalid' : '' }}" type="text" name="period_8" id="period_8" value="{{ old('period_8', $formValuePeriod->period_8) }}">
                @if($errors->has('period_8'))
                    <span class="text-danger">{{ $errors->first('period_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_8_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_9">{{ trans('cruds.formValuePeriod.fields.period_9') }}</label>
                <input class="form-control {{ $errors->has('period_9') ? 'is-invalid' : '' }}" type="text" name="period_9" id="period_9" value="{{ old('period_9', $formValuePeriod->period_9) }}">
                @if($errors->has('period_9'))
                    <span class="text-danger">{{ $errors->first('period_9') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_9_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_10">{{ trans('cruds.formValuePeriod.fields.period_10') }}</label>
                <input class="form-control {{ $errors->has('period_10') ? 'is-invalid' : '' }}" type="text" name="period_10" id="period_10" value="{{ old('period_10', $formValuePeriod->period_10) }}">
                @if($errors->has('period_10'))
                    <span class="text-danger">{{ $errors->first('period_10') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_11">{{ trans('cruds.formValuePeriod.fields.period_11') }}</label>
                <input class="form-control {{ $errors->has('period_11') ? 'is-invalid' : '' }}" type="text" name="period_11" id="period_11" value="{{ old('period_11', $formValuePeriod->period_11) }}">
                @if($errors->has('period_11'))
                    <span class="text-danger">{{ $errors->first('period_11') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_12">{{ trans('cruds.formValuePeriod.fields.period_12') }}</label>
                <input class="form-control {{ $errors->has('period_12') ? 'is-invalid' : '' }}" type="text" name="period_12" id="period_12" value="{{ old('period_12', $formValuePeriod->period_12) }}">
                @if($errors->has('period_12'))
                    <span class="text-danger">{{ $errors->first('period_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_13">{{ trans('cruds.formValuePeriod.fields.period_13') }}</label>
                <input class="form-control {{ $errors->has('period_13') ? 'is-invalid' : '' }}" type="text" name="period_13" id="period_13" value="{{ old('period_13', $formValuePeriod->period_13) }}">
                @if($errors->has('period_13'))
                    <span class="text-danger">{{ $errors->first('period_13') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_13_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_14">{{ trans('cruds.formValuePeriod.fields.period_14') }}</label>
                <input class="form-control {{ $errors->has('period_14') ? 'is-invalid' : '' }}" type="text" name="period_14" id="period_14" value="{{ old('period_14', $formValuePeriod->period_14) }}">
                @if($errors->has('period_14'))
                    <span class="text-danger">{{ $errors->first('period_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_14_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_15">{{ trans('cruds.formValuePeriod.fields.period_15') }}</label>
                <input class="form-control {{ $errors->has('period_15') ? 'is-invalid' : '' }}" type="text" name="period_15" id="period_15" value="{{ old('period_15', $formValuePeriod->period_15) }}">
                @if($errors->has('period_15'))
                    <span class="text-danger">{{ $errors->first('period_15') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_15_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_16">{{ trans('cruds.formValuePeriod.fields.period_16') }}</label>
                <input class="form-control {{ $errors->has('period_16') ? 'is-invalid' : '' }}" type="text" name="period_16" id="period_16" value="{{ old('period_16', $formValuePeriod->period_16) }}">
                @if($errors->has('period_16'))
                    <span class="text-danger">{{ $errors->first('period_16') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_16_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_17">{{ trans('cruds.formValuePeriod.fields.period_17') }}</label>
                <input class="form-control {{ $errors->has('period_17') ? 'is-invalid' : '' }}" type="text" name="period_17" id="period_17" value="{{ old('period_17', $formValuePeriod->period_17) }}">
                @if($errors->has('period_17'))
                    <span class="text-danger">{{ $errors->first('period_17') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_17_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_18">{{ trans('cruds.formValuePeriod.fields.period_18') }}</label>
                <input class="form-control {{ $errors->has('period_18') ? 'is-invalid' : '' }}" type="text" name="period_18" id="period_18" value="{{ old('period_18', $formValuePeriod->period_18) }}">
                @if($errors->has('period_18'))
                    <span class="text-danger">{{ $errors->first('period_18') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_18_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_19">{{ trans('cruds.formValuePeriod.fields.period_19') }}</label>
                <input class="form-control {{ $errors->has('period_19') ? 'is-invalid' : '' }}" type="text" name="period_19" id="period_19" value="{{ old('period_19', $formValuePeriod->period_19) }}">
                @if($errors->has('period_19'))
                    <span class="text-danger">{{ $errors->first('period_19') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_19_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_20">{{ trans('cruds.formValuePeriod.fields.period_20') }}</label>
                <input class="form-control {{ $errors->has('period_20') ? 'is-invalid' : '' }}" type="text" name="period_20" id="period_20" value="{{ old('period_20', $formValuePeriod->period_20) }}">
                @if($errors->has('period_20'))
                    <span class="text-danger">{{ $errors->first('period_20') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.period_20_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tank">{{ trans('cruds.formValuePeriod.fields.tank') }}</label>
                <input class="form-control {{ $errors->has('tank') ? 'is-invalid' : '' }}" type="text" name="tank" id="tank" value="{{ old('tank', $formValuePeriod->tank) }}">
                @if($errors->has('tank'))
                    <span class="text-danger">{{ $errors->first('tank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.tank_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_stamp">{{ trans('cruds.formValuePeriod.fields.time_stamp') }}</label>
                <input class="form-control datetime {{ $errors->has('time_stamp') ? 'is-invalid' : '' }}" type="text" name="time_stamp" id="time_stamp" value="{{ old('time_stamp', $formValuePeriod->time_stamp) }}">
                @if($errors->has('time_stamp'))
                    <span class="text-danger">{{ $errors->first('time_stamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValuePeriod.fields.time_stamp_helper') }}</span>
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