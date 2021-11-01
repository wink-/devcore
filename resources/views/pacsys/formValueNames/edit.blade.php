@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.formValueName.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.form-value-names.update", [$formValueName->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.formValueName.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $formValueName->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_name">{{ trans('cruds.formValueName.fields.form_name') }}</label>
                <input class="form-control {{ $errors->has('form_name') ? 'is-invalid' : '' }}" type="text" name="form_name" id="form_name" value="{{ old('form_name', $formValueName->form_name) }}">
                @if($errors->has('form_name'))
                    <span class="text-danger">{{ $errors->first('form_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.form_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_1">{{ trans('cruds.formValueName.fields.name_1') }}</label>
                <input class="form-control {{ $errors->has('name_1') ? 'is-invalid' : '' }}" type="text" name="name_1" id="name_1" value="{{ old('name_1', $formValueName->name_1) }}">
                @if($errors->has('name_1'))
                    <span class="text-danger">{{ $errors->first('name_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_2">{{ trans('cruds.formValueName.fields.name_2') }}</label>
                <input class="form-control {{ $errors->has('name_2') ? 'is-invalid' : '' }}" type="text" name="name_2" id="name_2" value="{{ old('name_2', $formValueName->name_2) }}">
                @if($errors->has('name_2'))
                    <span class="text-danger">{{ $errors->first('name_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_3">{{ trans('cruds.formValueName.fields.name_3') }}</label>
                <input class="form-control {{ $errors->has('name_3') ? 'is-invalid' : '' }}" type="text" name="name_3" id="name_3" value="{{ old('name_3', $formValueName->name_3) }}">
                @if($errors->has('name_3'))
                    <span class="text-danger">{{ $errors->first('name_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_4">{{ trans('cruds.formValueName.fields.name_4') }}</label>
                <input class="form-control {{ $errors->has('name_4') ? 'is-invalid' : '' }}" type="text" name="name_4" id="name_4" value="{{ old('name_4', $formValueName->name_4) }}">
                @if($errors->has('name_4'))
                    <span class="text-danger">{{ $errors->first('name_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_5">{{ trans('cruds.formValueName.fields.name_5') }}</label>
                <input class="form-control {{ $errors->has('name_5') ? 'is-invalid' : '' }}" type="text" name="name_5" id="name_5" value="{{ old('name_5', $formValueName->name_5) }}">
                @if($errors->has('name_5'))
                    <span class="text-danger">{{ $errors->first('name_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_6">{{ trans('cruds.formValueName.fields.name_6') }}</label>
                <input class="form-control {{ $errors->has('name_6') ? 'is-invalid' : '' }}" type="text" name="name_6" id="name_6" value="{{ old('name_6', $formValueName->name_6) }}">
                @if($errors->has('name_6'))
                    <span class="text-danger">{{ $errors->first('name_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_7">{{ trans('cruds.formValueName.fields.name_7') }}</label>
                <input class="form-control {{ $errors->has('name_7') ? 'is-invalid' : '' }}" type="text" name="name_7" id="name_7" value="{{ old('name_7', $formValueName->name_7) }}">
                @if($errors->has('name_7'))
                    <span class="text-danger">{{ $errors->first('name_7') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_7_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_8">{{ trans('cruds.formValueName.fields.name_8') }}</label>
                <input class="form-control {{ $errors->has('name_8') ? 'is-invalid' : '' }}" type="text" name="name_8" id="name_8" value="{{ old('name_8', $formValueName->name_8) }}">
                @if($errors->has('name_8'))
                    <span class="text-danger">{{ $errors->first('name_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_8_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_9">{{ trans('cruds.formValueName.fields.name_9') }}</label>
                <input class="form-control {{ $errors->has('name_9') ? 'is-invalid' : '' }}" type="text" name="name_9" id="name_9" value="{{ old('name_9', $formValueName->name_9) }}">
                @if($errors->has('name_9'))
                    <span class="text-danger">{{ $errors->first('name_9') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_9_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_10">{{ trans('cruds.formValueName.fields.name_10') }}</label>
                <input class="form-control {{ $errors->has('name_10') ? 'is-invalid' : '' }}" type="text" name="name_10" id="name_10" value="{{ old('name_10', $formValueName->name_10) }}">
                @if($errors->has('name_10'))
                    <span class="text-danger">{{ $errors->first('name_10') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_11">{{ trans('cruds.formValueName.fields.name_11') }}</label>
                <input class="form-control {{ $errors->has('name_11') ? 'is-invalid' : '' }}" type="text" name="name_11" id="name_11" value="{{ old('name_11', $formValueName->name_11) }}">
                @if($errors->has('name_11'))
                    <span class="text-danger">{{ $errors->first('name_11') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_12">{{ trans('cruds.formValueName.fields.name_12') }}</label>
                <input class="form-control {{ $errors->has('name_12') ? 'is-invalid' : '' }}" type="text" name="name_12" id="name_12" value="{{ old('name_12', $formValueName->name_12) }}">
                @if($errors->has('name_12'))
                    <span class="text-danger">{{ $errors->first('name_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_13">{{ trans('cruds.formValueName.fields.name_13') }}</label>
                <input class="form-control {{ $errors->has('name_13') ? 'is-invalid' : '' }}" type="text" name="name_13" id="name_13" value="{{ old('name_13', $formValueName->name_13) }}">
                @if($errors->has('name_13'))
                    <span class="text-danger">{{ $errors->first('name_13') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_13_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_14">{{ trans('cruds.formValueName.fields.name_14') }}</label>
                <input class="form-control {{ $errors->has('name_14') ? 'is-invalid' : '' }}" type="text" name="name_14" id="name_14" value="{{ old('name_14', $formValueName->name_14) }}">
                @if($errors->has('name_14'))
                    <span class="text-danger">{{ $errors->first('name_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_14_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_15">{{ trans('cruds.formValueName.fields.name_15') }}</label>
                <input class="form-control {{ $errors->has('name_15') ? 'is-invalid' : '' }}" type="text" name="name_15" id="name_15" value="{{ old('name_15', $formValueName->name_15) }}">
                @if($errors->has('name_15'))
                    <span class="text-danger">{{ $errors->first('name_15') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_15_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_16">{{ trans('cruds.formValueName.fields.name_16') }}</label>
                <input class="form-control {{ $errors->has('name_16') ? 'is-invalid' : '' }}" type="text" name="name_16" id="name_16" value="{{ old('name_16', $formValueName->name_16) }}">
                @if($errors->has('name_16'))
                    <span class="text-danger">{{ $errors->first('name_16') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_16_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_17">{{ trans('cruds.formValueName.fields.name_17') }}</label>
                <input class="form-control {{ $errors->has('name_17') ? 'is-invalid' : '' }}" type="text" name="name_17" id="name_17" value="{{ old('name_17', $formValueName->name_17) }}">
                @if($errors->has('name_17'))
                    <span class="text-danger">{{ $errors->first('name_17') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_17_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_18">{{ trans('cruds.formValueName.fields.name_18') }}</label>
                <input class="form-control {{ $errors->has('name_18') ? 'is-invalid' : '' }}" type="text" name="name_18" id="name_18" value="{{ old('name_18', $formValueName->name_18) }}">
                @if($errors->has('name_18'))
                    <span class="text-danger">{{ $errors->first('name_18') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_18_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_19">{{ trans('cruds.formValueName.fields.name_19') }}</label>
                <input class="form-control {{ $errors->has('name_19') ? 'is-invalid' : '' }}" type="text" name="name_19" id="name_19" value="{{ old('name_19', $formValueName->name_19) }}">
                @if($errors->has('name_19'))
                    <span class="text-danger">{{ $errors->first('name_19') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_19_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_20">{{ trans('cruds.formValueName.fields.name_20') }}</label>
                <input class="form-control {{ $errors->has('name_20') ? 'is-invalid' : '' }}" type="text" name="name_20" id="name_20" value="{{ old('name_20', $formValueName->name_20) }}">
                @if($errors->has('name_20'))
                    <span class="text-danger">{{ $errors->first('name_20') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.name_20_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tank">{{ trans('cruds.formValueName.fields.tank') }}</label>
                <input class="form-control {{ $errors->has('tank') ? 'is-invalid' : '' }}" type="text" name="tank" id="tank" value="{{ old('tank', $formValueName->tank) }}">
                @if($errors->has('tank'))
                    <span class="text-danger">{{ $errors->first('tank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.tank_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_stamp">{{ trans('cruds.formValueName.fields.time_stamp') }}</label>
                <input class="form-control datetime {{ $errors->has('time_stamp') ? 'is-invalid' : '' }}" type="text" name="time_stamp" id="time_stamp" value="{{ old('time_stamp', $formValueName->time_stamp) }}">
                @if($errors->has('time_stamp'))
                    <span class="text-danger">{{ $errors->first('time_stamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.time_stamp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="blank">{{ trans('cruds.formValueName.fields.blank') }}</label>
                <input class="form-control {{ $errors->has('blank') ? 'is-invalid' : '' }}" type="text" name="blank" id="blank" value="{{ old('blank', $formValueName->blank) }}">
                @if($errors->has('blank'))
                    <span class="text-danger">{{ $errors->first('blank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueName.fields.blank_helper') }}</span>
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