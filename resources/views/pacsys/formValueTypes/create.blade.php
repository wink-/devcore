@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.formValueType.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.form-value-types.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.formValueType.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_name">{{ trans('cruds.formValueType.fields.form_name') }}</label>
                <input class="form-control {{ $errors->has('form_name') ? 'is-invalid' : '' }}" type="text" name="form_name" id="form_name" value="{{ old('form_name', '') }}">
                @if($errors->has('form_name'))
                    <span class="text-danger">{{ $errors->first('form_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.form_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_1">{{ trans('cruds.formValueType.fields.type_1') }}</label>
                <input class="form-control {{ $errors->has('type_1') ? 'is-invalid' : '' }}" type="text" name="type_1" id="type_1" value="{{ old('type_1', '') }}">
                @if($errors->has('type_1'))
                    <span class="text-danger">{{ $errors->first('type_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_2">{{ trans('cruds.formValueType.fields.type_2') }}</label>
                <input class="form-control {{ $errors->has('type_2') ? 'is-invalid' : '' }}" type="text" name="type_2" id="type_2" value="{{ old('type_2', '') }}">
                @if($errors->has('type_2'))
                    <span class="text-danger">{{ $errors->first('type_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_3">{{ trans('cruds.formValueType.fields.type_3') }}</label>
                <input class="form-control {{ $errors->has('type_3') ? 'is-invalid' : '' }}" type="text" name="type_3" id="type_3" value="{{ old('type_3', '') }}">
                @if($errors->has('type_3'))
                    <span class="text-danger">{{ $errors->first('type_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_4">{{ trans('cruds.formValueType.fields.type_4') }}</label>
                <input class="form-control {{ $errors->has('type_4') ? 'is-invalid' : '' }}" type="text" name="type_4" id="type_4" value="{{ old('type_4', '') }}">
                @if($errors->has('type_4'))
                    <span class="text-danger">{{ $errors->first('type_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_5">{{ trans('cruds.formValueType.fields.type_5') }}</label>
                <input class="form-control {{ $errors->has('type_5') ? 'is-invalid' : '' }}" type="text" name="type_5" id="type_5" value="{{ old('type_5', '') }}">
                @if($errors->has('type_5'))
                    <span class="text-danger">{{ $errors->first('type_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_6">{{ trans('cruds.formValueType.fields.type_6') }}</label>
                <input class="form-control {{ $errors->has('type_6') ? 'is-invalid' : '' }}" type="text" name="type_6" id="type_6" value="{{ old('type_6', '') }}">
                @if($errors->has('type_6'))
                    <span class="text-danger">{{ $errors->first('type_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_7">{{ trans('cruds.formValueType.fields.type_7') }}</label>
                <input class="form-control {{ $errors->has('type_7') ? 'is-invalid' : '' }}" type="text" name="type_7" id="type_7" value="{{ old('type_7', '') }}">
                @if($errors->has('type_7'))
                    <span class="text-danger">{{ $errors->first('type_7') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_7_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_8">{{ trans('cruds.formValueType.fields.type_8') }}</label>
                <input class="form-control {{ $errors->has('type_8') ? 'is-invalid' : '' }}" type="text" name="type_8" id="type_8" value="{{ old('type_8', '') }}">
                @if($errors->has('type_8'))
                    <span class="text-danger">{{ $errors->first('type_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_8_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_9">{{ trans('cruds.formValueType.fields.type_9') }}</label>
                <input class="form-control {{ $errors->has('type_9') ? 'is-invalid' : '' }}" type="text" name="type_9" id="type_9" value="{{ old('type_9', '') }}">
                @if($errors->has('type_9'))
                    <span class="text-danger">{{ $errors->first('type_9') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_9_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_10">{{ trans('cruds.formValueType.fields.type_10') }}</label>
                <input class="form-control {{ $errors->has('type_10') ? 'is-invalid' : '' }}" type="text" name="type_10" id="type_10" value="{{ old('type_10', '') }}">
                @if($errors->has('type_10'))
                    <span class="text-danger">{{ $errors->first('type_10') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_11">{{ trans('cruds.formValueType.fields.type_11') }}</label>
                <input class="form-control {{ $errors->has('type_11') ? 'is-invalid' : '' }}" type="text" name="type_11" id="type_11" value="{{ old('type_11', '') }}">
                @if($errors->has('type_11'))
                    <span class="text-danger">{{ $errors->first('type_11') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_12">{{ trans('cruds.formValueType.fields.type_12') }}</label>
                <input class="form-control {{ $errors->has('type_12') ? 'is-invalid' : '' }}" type="text" name="type_12" id="type_12" value="{{ old('type_12', '') }}">
                @if($errors->has('type_12'))
                    <span class="text-danger">{{ $errors->first('type_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_13">{{ trans('cruds.formValueType.fields.type_13') }}</label>
                <input class="form-control {{ $errors->has('type_13') ? 'is-invalid' : '' }}" type="text" name="type_13" id="type_13" value="{{ old('type_13', '') }}">
                @if($errors->has('type_13'))
                    <span class="text-danger">{{ $errors->first('type_13') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_13_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_14">{{ trans('cruds.formValueType.fields.type_14') }}</label>
                <input class="form-control {{ $errors->has('type_14') ? 'is-invalid' : '' }}" type="text" name="type_14" id="type_14" value="{{ old('type_14', '') }}">
                @if($errors->has('type_14'))
                    <span class="text-danger">{{ $errors->first('type_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_14_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_15">{{ trans('cruds.formValueType.fields.type_15') }}</label>
                <input class="form-control {{ $errors->has('type_15') ? 'is-invalid' : '' }}" type="text" name="type_15" id="type_15" value="{{ old('type_15', '') }}">
                @if($errors->has('type_15'))
                    <span class="text-danger">{{ $errors->first('type_15') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_15_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_16">{{ trans('cruds.formValueType.fields.type_16') }}</label>
                <input class="form-control {{ $errors->has('type_16') ? 'is-invalid' : '' }}" type="text" name="type_16" id="type_16" value="{{ old('type_16', '') }}">
                @if($errors->has('type_16'))
                    <span class="text-danger">{{ $errors->first('type_16') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_16_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_17">{{ trans('cruds.formValueType.fields.type_17') }}</label>
                <input class="form-control {{ $errors->has('type_17') ? 'is-invalid' : '' }}" type="text" name="type_17" id="type_17" value="{{ old('type_17', '') }}">
                @if($errors->has('type_17'))
                    <span class="text-danger">{{ $errors->first('type_17') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_17_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_18">{{ trans('cruds.formValueType.fields.type_18') }}</label>
                <input class="form-control {{ $errors->has('type_18') ? 'is-invalid' : '' }}" type="text" name="type_18" id="type_18" value="{{ old('type_18', '') }}">
                @if($errors->has('type_18'))
                    <span class="text-danger">{{ $errors->first('type_18') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_18_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_19">{{ trans('cruds.formValueType.fields.type_19') }}</label>
                <input class="form-control {{ $errors->has('type_19') ? 'is-invalid' : '' }}" type="text" name="type_19" id="type_19" value="{{ old('type_19', '') }}">
                @if($errors->has('type_19'))
                    <span class="text-danger">{{ $errors->first('type_19') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_19_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_20">{{ trans('cruds.formValueType.fields.type_20') }}</label>
                <input class="form-control {{ $errors->has('type_20') ? 'is-invalid' : '' }}" type="text" name="type_20" id="type_20" value="{{ old('type_20', '') }}">
                @if($errors->has('type_20'))
                    <span class="text-danger">{{ $errors->first('type_20') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.type_20_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tank">{{ trans('cruds.formValueType.fields.tank') }}</label>
                <input class="form-control {{ $errors->has('tank') ? 'is-invalid' : '' }}" type="text" name="tank" id="tank" value="{{ old('tank', '') }}">
                @if($errors->has('tank'))
                    <span class="text-danger">{{ $errors->first('tank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.tank_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="timestamp">{{ trans('cruds.formValueType.fields.timestamp') }}</label>
                <input class="form-control datetime {{ $errors->has('timestamp') ? 'is-invalid' : '' }}" type="text" name="timestamp" id="timestamp" value="{{ old('timestamp') }}">
                @if($errors->has('timestamp'))
                    <span class="text-danger">{{ $errors->first('timestamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.timestamp_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('false') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="false" value="0">
                    <input class="form-check-input" type="checkbox" name="false" id="false" value="1" {{ old('false', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="false">{{ trans('cruds.formValueType.fields.false') }}</label>
                </div>
                @if($errors->has('false'))
                    <span class="text-danger">{{ $errors->first('false') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.false_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('true') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="true" value="0">
                    <input class="form-check-input" type="checkbox" name="true" id="true" value="1" {{ old('true', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="true">{{ trans('cruds.formValueType.fields.true') }}</label>
                </div>
                @if($errors->has('true'))
                    <span class="text-danger">{{ $errors->first('true') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueType.fields.true_helper') }}</span>
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