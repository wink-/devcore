@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.laborCard.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.labor-cards.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="work_order_number">{{ trans('cruds.laborCard.fields.work_order_number') }}</label>
                <input class="form-control {{ $errors->has('work_order_number') ? 'is-invalid' : '' }}" type="number" name="work_order_number" id="work_order_number" value="{{ old('work_order_number', '') }}" step="1">
                @if($errors->has('work_order_number'))
                    <span class="text-danger">{{ $errors->first('work_order_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.work_order_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="employee_code">{{ trans('cruds.laborCard.fields.employee_code') }}</label>
                <input class="form-control {{ $errors->has('employee_code') ? 'is-invalid' : '' }}" type="text" name="employee_code" id="employee_code" value="{{ old('employee_code', '') }}">
                @if($errors->has('employee_code'))
                    <span class="text-danger">{{ $errors->first('employee_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.employee_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="step_code">{{ trans('cruds.laborCard.fields.step_code') }}</label>
                <input class="form-control {{ $errors->has('step_code') ? 'is-invalid' : '' }}" type="text" name="step_code" id="step_code" value="{{ old('step_code', '') }}">
                @if($errors->has('step_code'))
                    <span class="text-danger">{{ $errors->first('step_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.step_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_date">{{ trans('cruds.laborCard.fields.job_date') }}</label>
                <input class="form-control date {{ $errors->has('job_date') ? 'is-invalid' : '' }}" type="text" name="job_date" id="job_date" value="{{ old('job_date') }}">
                @if($errors->has('job_date'))
                    <span class="text-danger">{{ $errors->first('job_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.job_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_of_day">{{ trans('cruds.laborCard.fields.time_of_day') }}</label>
                <input class="form-control datetime {{ $errors->has('time_of_day') ? 'is-invalid' : '' }}" type="text" name="time_of_day" id="time_of_day" value="{{ old('time_of_day') }}">
                @if($errors->has('time_of_day'))
                    <span class="text-danger">{{ $errors->first('time_of_day') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.time_of_day_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="actual_hours">{{ trans('cruds.laborCard.fields.actual_hours') }}</label>
                <input class="form-control {{ $errors->has('actual_hours') ? 'is-invalid' : '' }}" type="number" name="actual_hours" id="actual_hours" value="{{ old('actual_hours', '') }}" step="0.01">
                @if($errors->has('actual_hours'))
                    <span class="text-danger">{{ $errors->first('actual_hours') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.actual_hours_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="man_hours">{{ trans('cruds.laborCard.fields.man_hours') }}</label>
                <input class="form-control {{ $errors->has('man_hours') ? 'is-invalid' : '' }}" type="number" name="man_hours" id="man_hours" value="{{ old('man_hours', '') }}" step="0.01">
                @if($errors->has('man_hours'))
                    <span class="text-danger">{{ $errors->first('man_hours') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.man_hours_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="actual_pieces">{{ trans('cruds.laborCard.fields.actual_pieces') }}</label>
                <input class="form-control {{ $errors->has('actual_pieces') ? 'is-invalid' : '' }}" type="number" name="actual_pieces" id="actual_pieces" value="{{ old('actual_pieces', '') }}" step="0.01">
                @if($errors->has('actual_pieces'))
                    <span class="text-danger">{{ $errors->first('actual_pieces') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.actual_pieces_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="equipment_code">{{ trans('cruds.laborCard.fields.equipment_code') }}</label>
                <input class="form-control {{ $errors->has('equipment_code') ? 'is-invalid' : '' }}" type="text" name="equipment_code" id="equipment_code" value="{{ old('equipment_code', '') }}">
                @if($errors->has('equipment_code'))
                    <span class="text-danger">{{ $errors->first('equipment_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.equipment_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="equipment_quantity">{{ trans('cruds.laborCard.fields.equipment_quantity') }}</label>
                <input class="form-control {{ $errors->has('equipment_quantity') ? 'is-invalid' : '' }}" type="number" name="equipment_quantity" id="equipment_quantity" value="{{ old('equipment_quantity', '') }}" step="0.01">
                @if($errors->has('equipment_quantity'))
                    <span class="text-danger">{{ $errors->first('equipment_quantity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.equipment_quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="loads">{{ trans('cruds.laborCard.fields.loads') }}</label>
                <input class="form-control {{ $errors->has('loads') ? 'is-invalid' : '' }}" type="number" name="loads" id="loads" value="{{ old('loads', '') }}" step="0.01">
                @if($errors->has('loads'))
                    <span class="text-danger">{{ $errors->first('loads') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.loads_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cycle_time">{{ trans('cruds.laborCard.fields.cycle_time') }}</label>
                <input class="form-control {{ $errors->has('cycle_time') ? 'is-invalid' : '' }}" type="number" name="cycle_time" id="cycle_time" value="{{ old('cycle_time', '') }}" step="0.01">
                @if($errors->has('cycle_time'))
                    <span class="text-danger">{{ $errors->first('cycle_time') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.cycle_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time_finished">{{ trans('cruds.laborCard.fields.time_finished') }}</label>
                <input class="form-control datetime {{ $errors->has('time_finished') ? 'is-invalid' : '' }}" type="text" name="time_finished" id="time_finished" value="{{ old('time_finished') }}">
                @if($errors->has('time_finished'))
                    <span class="text-danger">{{ $errors->first('time_finished') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.time_finished_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="session">{{ trans('cruds.laborCard.fields.session') }}</label>
                <input class="form-control {{ $errors->has('session') ? 'is-invalid' : '' }}" type="text" name="session" id="session" value="{{ old('session', '') }}">
                @if($errors->has('session'))
                    <span class="text-danger">{{ $errors->first('session') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.session_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.laborCard.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.laborCard.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.laborCard.fields.revision_helper') }}</span>
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