@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.formValueAction.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.form-value-actions.update", [$formValueAction->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.formValueAction.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $formValueAction->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="form_name">{{ trans('cruds.formValueAction.fields.form_name') }}</label>
                <input class="form-control {{ $errors->has('form_name') ? 'is-invalid' : '' }}" type="text" name="form_name" id="form_name" value="{{ old('form_name', $formValueAction->form_name) }}">
                @if($errors->has('form_name'))
                    <span class="text-danger">{{ $errors->first('form_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.form_name_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_1') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_1" value="0">
                    <input class="form-check-input" type="checkbox" name="action_1" id="action_1" value="1" {{ $formValueAction->action_1 || old('action_1', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_1">{{ trans('cruds.formValueAction.fields.action_1') }}</label>
                </div>
                @if($errors->has('action_1'))
                    <span class="text-danger">{{ $errors->first('action_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_1_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_2') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_2" value="0">
                    <input class="form-check-input" type="checkbox" name="action_2" id="action_2" value="1" {{ $formValueAction->action_2 || old('action_2', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_2">{{ trans('cruds.formValueAction.fields.action_2') }}</label>
                </div>
                @if($errors->has('action_2'))
                    <span class="text-danger">{{ $errors->first('action_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_2_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_3') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_3" value="0">
                    <input class="form-check-input" type="checkbox" name="action_3" id="action_3" value="1" {{ $formValueAction->action_3 || old('action_3', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_3">{{ trans('cruds.formValueAction.fields.action_3') }}</label>
                </div>
                @if($errors->has('action_3'))
                    <span class="text-danger">{{ $errors->first('action_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_3_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_4') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_4" value="0">
                    <input class="form-check-input" type="checkbox" name="action_4" id="action_4" value="1" {{ $formValueAction->action_4 || old('action_4', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_4">{{ trans('cruds.formValueAction.fields.action_4') }}</label>
                </div>
                @if($errors->has('action_4'))
                    <span class="text-danger">{{ $errors->first('action_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_4_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_5') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_5" value="0">
                    <input class="form-check-input" type="checkbox" name="action_5" id="action_5" value="1" {{ $formValueAction->action_5 || old('action_5', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_5">{{ trans('cruds.formValueAction.fields.action_5') }}</label>
                </div>
                @if($errors->has('action_5'))
                    <span class="text-danger">{{ $errors->first('action_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_5_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_6') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_6" value="0">
                    <input class="form-check-input" type="checkbox" name="action_6" id="action_6" value="1" {{ $formValueAction->action_6 || old('action_6', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_6">{{ trans('cruds.formValueAction.fields.action_6') }}</label>
                </div>
                @if($errors->has('action_6'))
                    <span class="text-danger">{{ $errors->first('action_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_6_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_7') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_7" value="0">
                    <input class="form-check-input" type="checkbox" name="action_7" id="action_7" value="1" {{ $formValueAction->action_7 || old('action_7', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_7">{{ trans('cruds.formValueAction.fields.action_7') }}</label>
                </div>
                @if($errors->has('action_7'))
                    <span class="text-danger">{{ $errors->first('action_7') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_7_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_8') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_8" value="0">
                    <input class="form-check-input" type="checkbox" name="action_8" id="action_8" value="1" {{ $formValueAction->action_8 || old('action_8', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_8">{{ trans('cruds.formValueAction.fields.action_8') }}</label>
                </div>
                @if($errors->has('action_8'))
                    <span class="text-danger">{{ $errors->first('action_8') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_8_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_9') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_9" value="0">
                    <input class="form-check-input" type="checkbox" name="action_9" id="action_9" value="1" {{ $formValueAction->action_9 || old('action_9', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_9">{{ trans('cruds.formValueAction.fields.action_9') }}</label>
                </div>
                @if($errors->has('action_9'))
                    <span class="text-danger">{{ $errors->first('action_9') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_9_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_10') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_10" value="0">
                    <input class="form-check-input" type="checkbox" name="action_10" id="action_10" value="1" {{ $formValueAction->action_10 || old('action_10', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_10">{{ trans('cruds.formValueAction.fields.action_10') }}</label>
                </div>
                @if($errors->has('action_10'))
                    <span class="text-danger">{{ $errors->first('action_10') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_10_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_11') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_11" value="0">
                    <input class="form-check-input" type="checkbox" name="action_11" id="action_11" value="1" {{ $formValueAction->action_11 || old('action_11', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_11">{{ trans('cruds.formValueAction.fields.action_11') }}</label>
                </div>
                @if($errors->has('action_11'))
                    <span class="text-danger">{{ $errors->first('action_11') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_11_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_12') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_12" value="0">
                    <input class="form-check-input" type="checkbox" name="action_12" id="action_12" value="1" {{ $formValueAction->action_12 || old('action_12', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_12">{{ trans('cruds.formValueAction.fields.action_12') }}</label>
                </div>
                @if($errors->has('action_12'))
                    <span class="text-danger">{{ $errors->first('action_12') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_12_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_13') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_13" value="0">
                    <input class="form-check-input" type="checkbox" name="action_13" id="action_13" value="1" {{ $formValueAction->action_13 || old('action_13', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_13">{{ trans('cruds.formValueAction.fields.action_13') }}</label>
                </div>
                @if($errors->has('action_13'))
                    <span class="text-danger">{{ $errors->first('action_13') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_13_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_14') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_14" value="0">
                    <input class="form-check-input" type="checkbox" name="action_14" id="action_14" value="1" {{ $formValueAction->action_14 || old('action_14', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_14">{{ trans('cruds.formValueAction.fields.action_14') }}</label>
                </div>
                @if($errors->has('action_14'))
                    <span class="text-danger">{{ $errors->first('action_14') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_14_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_15') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_15" value="0">
                    <input class="form-check-input" type="checkbox" name="action_15" id="action_15" value="1" {{ $formValueAction->action_15 || old('action_15', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_15">{{ trans('cruds.formValueAction.fields.action_15') }}</label>
                </div>
                @if($errors->has('action_15'))
                    <span class="text-danger">{{ $errors->first('action_15') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_15_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_16') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_16" value="0">
                    <input class="form-check-input" type="checkbox" name="action_16" id="action_16" value="1" {{ $formValueAction->action_16 || old('action_16', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_16">{{ trans('cruds.formValueAction.fields.action_16') }}</label>
                </div>
                @if($errors->has('action_16'))
                    <span class="text-danger">{{ $errors->first('action_16') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_16_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_17') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_17" value="0">
                    <input class="form-check-input" type="checkbox" name="action_17" id="action_17" value="1" {{ $formValueAction->action_17 || old('action_17', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_17">{{ trans('cruds.formValueAction.fields.action_17') }}</label>
                </div>
                @if($errors->has('action_17'))
                    <span class="text-danger">{{ $errors->first('action_17') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_17_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_18') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_18" value="0">
                    <input class="form-check-input" type="checkbox" name="action_18" id="action_18" value="1" {{ $formValueAction->action_18 || old('action_18', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_18">{{ trans('cruds.formValueAction.fields.action_18') }}</label>
                </div>
                @if($errors->has('action_18'))
                    <span class="text-danger">{{ $errors->first('action_18') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_18_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_19') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_19" value="0">
                    <input class="form-check-input" type="checkbox" name="action_19" id="action_19" value="1" {{ $formValueAction->action_19 || old('action_19', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_19">{{ trans('cruds.formValueAction.fields.action_19') }}</label>
                </div>
                @if($errors->has('action_19'))
                    <span class="text-danger">{{ $errors->first('action_19') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_19_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('action_20') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="action_20" value="0">
                    <input class="form-check-input" type="checkbox" name="action_20" id="action_20" value="1" {{ $formValueAction->action_20 || old('action_20', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="action_20">{{ trans('cruds.formValueAction.fields.action_20') }}</label>
                </div>
                @if($errors->has('action_20'))
                    <span class="text-danger">{{ $errors->first('action_20') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.action_20_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tank">{{ trans('cruds.formValueAction.fields.tank') }}</label>
                <input class="form-control {{ $errors->has('tank') ? 'is-invalid' : '' }}" type="text" name="tank" id="tank" value="{{ old('tank', $formValueAction->tank) }}">
                @if($errors->has('tank'))
                    <span class="text-danger">{{ $errors->first('tank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.tank_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_stamp">{{ trans('cruds.formValueAction.fields.time_stamp') }}</label>
                <input class="form-control datetime {{ $errors->has('time_stamp') ? 'is-invalid' : '' }}" type="text" name="time_stamp" id="time_stamp" value="{{ old('time_stamp', $formValueAction->time_stamp) }}">
                @if($errors->has('time_stamp'))
                    <span class="text-danger">{{ $errors->first('time_stamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.formValueAction.fields.time_stamp_helper') }}</span>
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