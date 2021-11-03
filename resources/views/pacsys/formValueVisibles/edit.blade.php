@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit {{ trans('cruds.formValueVisible.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("pacsys.form-value-visibles.update", [$formValueVisible->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.formValueVisible.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $formValueVisible->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_name">{{ trans('cruds.formValueVisible.fields.form_name') }}</label>
                <input class="form-control {{ $errors->has('form_name') ? 'is-invalid' : '' }}" type="text" name="form_name" id="form_name" value="{{ old('form_name', $formValueVisible->form_name) }}">
                @if($errors->has('form_name'))
                    <span class="text-danger">{{ $errors->first('form_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.form_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_1">{{ trans('cruds.formValueVisible.fields.visible_1') }}</label>
                <input class="form-control {{ $errors->has('visible_1') ? 'is-invalid' : '' }}" type="text" name="visible_1" id="visible_1" value="{{ old('visible_1', $formValueVisible->visible_1) }}">
                @if($errors->has('visible_1'))
                    <span class="text-danger">{{ $errors->first('visible_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_2">{{ trans('cruds.formValueVisible.fields.visible_2') }}</label>
                <input class="form-control {{ $errors->has('visible_2') ? 'is-invalid' : '' }}" type="text" name="visible_2" id="visible_2" value="{{ old('visible_2', $formValueVisible->visible_2) }}">
                @if($errors->has('visible_2'))
                    <span class="text-danger">{{ $errors->first('visible_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_3">{{ trans('cruds.formValueVisible.fields.visible_3') }}</label>
                <input class="form-control {{ $errors->has('visible_3') ? 'is-invalid' : '' }}" type="text" name="visible_3" id="visible_3" value="{{ old('visible_3', $formValueVisible->visible_3) }}">
                @if($errors->has('visible_3'))
                    <span class="text-danger">{{ $errors->first('visible_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_4">{{ trans('cruds.formValueVisible.fields.visible_4') }}</label>
                <input class="form-control {{ $errors->has('visible_4') ? 'is-invalid' : '' }}" type="text" name="visible_4" id="visible_4" value="{{ old('visible_4', $formValueVisible->visible_4) }}">
                @if($errors->has('visible_4'))
                    <span class="text-danger">{{ $errors->first('visible_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_5">{{ trans('cruds.formValueVisible.fields.visible_5') }}</label>
                <input class="form-control {{ $errors->has('visible_5') ? 'is-invalid' : '' }}" type="text" name="visible_5" id="visible_5" value="{{ old('visible_5', $formValueVisible->visible_5) }}">
                @if($errors->has('visible_5'))
                    <span class="text-danger">{{ $errors->first('visible_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_6">{{ trans('cruds.formValueVisible.fields.visible_6') }}</label>
                <input class="form-control {{ $errors->has('visible_6') ? 'is-invalid' : '' }}" type="text" name="visible_6" id="visible_6" value="{{ old('visible_6', $formValueVisible->visible_6) }}">
                @if($errors->has('visible_6'))
                    <span class="text-danger">{{ $errors->first('visible_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_7">{{ trans('cruds.formValueVisible.fields.visible_7') }}</label>
                <input class="form-control {{ $errors->has('visible_7') ? 'is-invalid' : '' }}" type="text" name="visible_7" id="visible_7" value="{{ old('visible_7', $formValueVisible->visible_7) }}">
                @if($errors->has('visible_7'))
                    <span class="text-danger">{{ $errors->first('visible_7') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_7_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_8">{{ trans('cruds.formValueVisible.fields.visible_8') }}</label>
                <input class="form-control {{ $errors->has('visible_8') ? 'is-invalid' : '' }}" type="text" name="visible_8" id="visible_8" value="{{ old('visible_8', $formValueVisible->visible_8) }}">
                @if($errors->has('visible_8'))
                    <span class="text-danger">{{ $errors->first('visible_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_8_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_9">{{ trans('cruds.formValueVisible.fields.visible_9') }}</label>
                <input class="form-control {{ $errors->has('visible_9') ? 'is-invalid' : '' }}" type="text" name="visible_9" id="visible_9" value="{{ old('visible_9', $formValueVisible->visible_9) }}">
                @if($errors->has('visible_9'))
                    <span class="text-danger">{{ $errors->first('visible_9') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_9_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_10">{{ trans('cruds.formValueVisible.fields.visible_10') }}</label>
                <input class="form-control {{ $errors->has('visible_10') ? 'is-invalid' : '' }}" type="text" name="visible_10" id="visible_10" value="{{ old('visible_10', $formValueVisible->visible_10) }}">
                @if($errors->has('visible_10'))
                    <span class="text-danger">{{ $errors->first('visible_10') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_11">{{ trans('cruds.formValueVisible.fields.visible_11') }}</label>
                <input class="form-control {{ $errors->has('visible_11') ? 'is-invalid' : '' }}" type="text" name="visible_11" id="visible_11" value="{{ old('visible_11', $formValueVisible->visible_11) }}">
                @if($errors->has('visible_11'))
                    <span class="text-danger">{{ $errors->first('visible_11') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_12">{{ trans('cruds.formValueVisible.fields.visible_12') }}</label>
                <input class="form-control {{ $errors->has('visible_12') ? 'is-invalid' : '' }}" type="text" name="visible_12" id="visible_12" value="{{ old('visible_12', $formValueVisible->visible_12) }}">
                @if($errors->has('visible_12'))
                    <span class="text-danger">{{ $errors->first('visible_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_13">{{ trans('cruds.formValueVisible.fields.visible_13') }}</label>
                <input class="form-control {{ $errors->has('visible_13') ? 'is-invalid' : '' }}" type="text" name="visible_13" id="visible_13" value="{{ old('visible_13', $formValueVisible->visible_13) }}">
                @if($errors->has('visible_13'))
                    <span class="text-danger">{{ $errors->first('visible_13') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_13_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_14">{{ trans('cruds.formValueVisible.fields.visible_14') }}</label>
                <input class="form-control {{ $errors->has('visible_14') ? 'is-invalid' : '' }}" type="text" name="visible_14" id="visible_14" value="{{ old('visible_14', $formValueVisible->visible_14) }}">
                @if($errors->has('visible_14'))
                    <span class="text-danger">{{ $errors->first('visible_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_14_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_15">{{ trans('cruds.formValueVisible.fields.visible_15') }}</label>
                <input class="form-control {{ $errors->has('visible_15') ? 'is-invalid' : '' }}" type="text" name="visible_15" id="visible_15" value="{{ old('visible_15', $formValueVisible->visible_15) }}">
                @if($errors->has('visible_15'))
                    <span class="text-danger">{{ $errors->first('visible_15') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_15_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_16">{{ trans('cruds.formValueVisible.fields.visible_16') }}</label>
                <input class="form-control {{ $errors->has('visible_16') ? 'is-invalid' : '' }}" type="text" name="visible_16" id="visible_16" value="{{ old('visible_16', $formValueVisible->visible_16) }}">
                @if($errors->has('visible_16'))
                    <span class="text-danger">{{ $errors->first('visible_16') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_16_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_17">{{ trans('cruds.formValueVisible.fields.visible_17') }}</label>
                <input class="form-control {{ $errors->has('visible_17') ? 'is-invalid' : '' }}" type="text" name="visible_17" id="visible_17" value="{{ old('visible_17', $formValueVisible->visible_17) }}">
                @if($errors->has('visible_17'))
                    <span class="text-danger">{{ $errors->first('visible_17') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_17_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_18">{{ trans('cruds.formValueVisible.fields.visible_18') }}</label>
                <input class="form-control {{ $errors->has('visible_18') ? 'is-invalid' : '' }}" type="text" name="visible_18" id="visible_18" value="{{ old('visible_18', $formValueVisible->visible_18) }}">
                @if($errors->has('visible_18'))
                    <span class="text-danger">{{ $errors->first('visible_18') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_18_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_19">{{ trans('cruds.formValueVisible.fields.visible_19') }}</label>
                <input class="form-control {{ $errors->has('visible_19') ? 'is-invalid' : '' }}" type="text" name="visible_19" id="visible_19" value="{{ old('visible_19', $formValueVisible->visible_19) }}">
                @if($errors->has('visible_19'))
                    <span class="text-danger">{{ $errors->first('visible_19') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_19_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visible_20">{{ trans('cruds.formValueVisible.fields.visible_20') }}</label>
                <input class="form-control {{ $errors->has('visible_20') ? 'is-invalid' : '' }}" type="text" name="visible_20" id="visible_20" value="{{ old('visible_20', $formValueVisible->visible_20) }}">
                @if($errors->has('visible_20'))
                    <span class="text-danger">{{ $errors->first('visible_20') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.visible_20_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tank">{{ trans('cruds.formValueVisible.fields.tank') }}</label>
                <input class="form-control {{ $errors->has('tank') ? 'is-invalid' : '' }}" type="text" name="tank" id="tank" value="{{ old('tank', $formValueVisible->tank) }}">
                @if($errors->has('tank'))
                    <span class="text-danger">{{ $errors->first('tank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.tank_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="timestamp">{{ trans('cruds.formValueVisible.fields.timestamp') }}</label>
                <input class="form-control datetime {{ $errors->has('timestamp') ? 'is-invalid' : '' }}" type="text" name="timestamp" id="timestamp" value="{{ old('timestamp', $formValueVisible->timestamp) }}">
                @if($errors->has('timestamp'))
                    <span class="text-danger">{{ $errors->first('timestamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueVisible.fields.timestamp_helper') }}</span>
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