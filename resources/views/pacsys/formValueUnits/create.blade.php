@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.formValueUnit.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("pacsys.form-value-units.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.formValueUnit.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_name">{{ trans('cruds.formValueUnit.fields.form_name') }}</label>
                <input class="form-control {{ $errors->has('form_name') ? 'is-invalid' : '' }}" type="text" name="form_name" id="form_name" value="{{ old('form_name', '') }}">
                @if($errors->has('form_name'))
                    <span class="text-danger">{{ $errors->first('form_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.form_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_1">{{ trans('cruds.formValueUnit.fields.unit_1') }}</label>
                <input class="form-control {{ $errors->has('unit_1') ? 'is-invalid' : '' }}" type="text" name="unit_1" id="unit_1" value="{{ old('unit_1', '') }}">
                @if($errors->has('unit_1'))
                    <span class="text-danger">{{ $errors->first('unit_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_2">{{ trans('cruds.formValueUnit.fields.unit_2') }}</label>
                <input class="form-control {{ $errors->has('unit_2') ? 'is-invalid' : '' }}" type="text" name="unit_2" id="unit_2" value="{{ old('unit_2', '') }}">
                @if($errors->has('unit_2'))
                    <span class="text-danger">{{ $errors->first('unit_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_3">{{ trans('cruds.formValueUnit.fields.unit_3') }}</label>
                <input class="form-control {{ $errors->has('unit_3') ? 'is-invalid' : '' }}" type="text" name="unit_3" id="unit_3" value="{{ old('unit_3', '') }}">
                @if($errors->has('unit_3'))
                    <span class="text-danger">{{ $errors->first('unit_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_4">{{ trans('cruds.formValueUnit.fields.unit_4') }}</label>
                <input class="form-control {{ $errors->has('unit_4') ? 'is-invalid' : '' }}" type="text" name="unit_4" id="unit_4" value="{{ old('unit_4', '') }}">
                @if($errors->has('unit_4'))
                    <span class="text-danger">{{ $errors->first('unit_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_5">{{ trans('cruds.formValueUnit.fields.unit_5') }}</label>
                <input class="form-control {{ $errors->has('unit_5') ? 'is-invalid' : '' }}" type="text" name="unit_5" id="unit_5" value="{{ old('unit_5', '') }}">
                @if($errors->has('unit_5'))
                    <span class="text-danger">{{ $errors->first('unit_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_6">{{ trans('cruds.formValueUnit.fields.unit_6') }}</label>
                <input class="form-control {{ $errors->has('unit_6') ? 'is-invalid' : '' }}" type="text" name="unit_6" id="unit_6" value="{{ old('unit_6', '') }}">
                @if($errors->has('unit_6'))
                    <span class="text-danger">{{ $errors->first('unit_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_7">{{ trans('cruds.formValueUnit.fields.unit_7') }}</label>
                <input class="form-control {{ $errors->has('unit_7') ? 'is-invalid' : '' }}" type="text" name="unit_7" id="unit_7" value="{{ old('unit_7', '') }}">
                @if($errors->has('unit_7'))
                    <span class="text-danger">{{ $errors->first('unit_7') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_7_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_8">{{ trans('cruds.formValueUnit.fields.unit_8') }}</label>
                <input class="form-control {{ $errors->has('unit_8') ? 'is-invalid' : '' }}" type="text" name="unit_8" id="unit_8" value="{{ old('unit_8', '') }}">
                @if($errors->has('unit_8'))
                    <span class="text-danger">{{ $errors->first('unit_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_8_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_9">{{ trans('cruds.formValueUnit.fields.unit_9') }}</label>
                <input class="form-control {{ $errors->has('unit_9') ? 'is-invalid' : '' }}" type="text" name="unit_9" id="unit_9" value="{{ old('unit_9', '') }}">
                @if($errors->has('unit_9'))
                    <span class="text-danger">{{ $errors->first('unit_9') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_9_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_10">{{ trans('cruds.formValueUnit.fields.unit_10') }}</label>
                <input class="form-control {{ $errors->has('unit_10') ? 'is-invalid' : '' }}" type="text" name="unit_10" id="unit_10" value="{{ old('unit_10', '') }}">
                @if($errors->has('unit_10'))
                    <span class="text-danger">{{ $errors->first('unit_10') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_11">{{ trans('cruds.formValueUnit.fields.unit_11') }}</label>
                <input class="form-control {{ $errors->has('unit_11') ? 'is-invalid' : '' }}" type="text" name="unit_11" id="unit_11" value="{{ old('unit_11', '') }}">
                @if($errors->has('unit_11'))
                    <span class="text-danger">{{ $errors->first('unit_11') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_12">{{ trans('cruds.formValueUnit.fields.unit_12') }}</label>
                <input class="form-control {{ $errors->has('unit_12') ? 'is-invalid' : '' }}" type="text" name="unit_12" id="unit_12" value="{{ old('unit_12', '') }}">
                @if($errors->has('unit_12'))
                    <span class="text-danger">{{ $errors->first('unit_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_13">{{ trans('cruds.formValueUnit.fields.unit_13') }}</label>
                <input class="form-control {{ $errors->has('unit_13') ? 'is-invalid' : '' }}" type="text" name="unit_13" id="unit_13" value="{{ old('unit_13', '') }}">
                @if($errors->has('unit_13'))
                    <span class="text-danger">{{ $errors->first('unit_13') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_13_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_14">{{ trans('cruds.formValueUnit.fields.unit_14') }}</label>
                <input class="form-control {{ $errors->has('unit_14') ? 'is-invalid' : '' }}" type="text" name="unit_14" id="unit_14" value="{{ old('unit_14', '') }}">
                @if($errors->has('unit_14'))
                    <span class="text-danger">{{ $errors->first('unit_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_14_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_15">{{ trans('cruds.formValueUnit.fields.unit_15') }}</label>
                <input class="form-control {{ $errors->has('unit_15') ? 'is-invalid' : '' }}" type="text" name="unit_15" id="unit_15" value="{{ old('unit_15', '') }}">
                @if($errors->has('unit_15'))
                    <span class="text-danger">{{ $errors->first('unit_15') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_15_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_16">{{ trans('cruds.formValueUnit.fields.unit_16') }}</label>
                <input class="form-control {{ $errors->has('unit_16') ? 'is-invalid' : '' }}" type="text" name="unit_16" id="unit_16" value="{{ old('unit_16', '') }}">
                @if($errors->has('unit_16'))
                    <span class="text-danger">{{ $errors->first('unit_16') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_16_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_17">{{ trans('cruds.formValueUnit.fields.unit_17') }}</label>
                <input class="form-control {{ $errors->has('unit_17') ? 'is-invalid' : '' }}" type="text" name="unit_17" id="unit_17" value="{{ old('unit_17', '') }}">
                @if($errors->has('unit_17'))
                    <span class="text-danger">{{ $errors->first('unit_17') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_17_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_18">{{ trans('cruds.formValueUnit.fields.unit_18') }}</label>
                <input class="form-control {{ $errors->has('unit_18') ? 'is-invalid' : '' }}" type="text" name="unit_18" id="unit_18" value="{{ old('unit_18', '') }}">
                @if($errors->has('unit_18'))
                    <span class="text-danger">{{ $errors->first('unit_18') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_18_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_19">{{ trans('cruds.formValueUnit.fields.unit_19') }}</label>
                <input class="form-control {{ $errors->has('unit_19') ? 'is-invalid' : '' }}" type="text" name="unit_19" id="unit_19" value="{{ old('unit_19', '') }}">
                @if($errors->has('unit_19'))
                    <span class="text-danger">{{ $errors->first('unit_19') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_19_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_20">{{ trans('cruds.formValueUnit.fields.unit_20') }}</label>
                <input class="form-control {{ $errors->has('unit_20') ? 'is-invalid' : '' }}" type="text" name="unit_20" id="unit_20" value="{{ old('unit_20', '') }}">
                @if($errors->has('unit_20'))
                    <span class="text-danger">{{ $errors->first('unit_20') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.unit_20_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tank">{{ trans('cruds.formValueUnit.fields.tank') }}</label>
                <input class="form-control {{ $errors->has('tank') ? 'is-invalid' : '' }}" type="text" name="tank" id="tank" value="{{ old('tank', '') }}">
                @if($errors->has('tank'))
                    <span class="text-danger">{{ $errors->first('tank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.tank_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="timestamp">{{ trans('cruds.formValueUnit.fields.timestamp') }}</label>
                <input class="form-control datetime {{ $errors->has('timestamp') ? 'is-invalid' : '' }}" type="text" name="timestamp" id="timestamp" value="{{ old('timestamp') }}">
                @if($errors->has('timestamp'))
                    <span class="text-danger">{{ $errors->first('timestamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueUnit.fields.timestamp_helper') }}</span>
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