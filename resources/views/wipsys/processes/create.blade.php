@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.process.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("wipsys.processes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.process.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}" required>
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.process.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.process.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.process.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="minimum_lot_charge">{{ trans('cruds.process.fields.minimum_lot_charge') }}</label>
                <input class="form-control {{ $errors->has('minimum_lot_charge') ? 'is-invalid' : '' }}" type="number" name="minimum_lot_charge" id="minimum_lot_charge" value="{{ old('minimum_lot_charge', '') }}" step="0.01">
                @if($errors->has('minimum_lot_charge'))
                    <span class="text-danger">{{ $errors->first('minimum_lot_charge') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.process.fields.minimum_lot_charge_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('compliant_rohs') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="compliant_rohs" value="0">
                    <input class="form-check-input" type="checkbox" name="compliant_rohs" id="compliant_rohs" value="1" {{ old('compliant_rohs', 0) == 1 || old('compliant_rohs') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="compliant_rohs">{{ trans('cruds.process.fields.compliant_rohs') }}</label>
                </div>
                @if($errors->has('compliant_rohs'))
                    <span class="text-danger">{{ $errors->first('compliant_rohs') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.process.fields.compliant_rohs_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('compliant_reach') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="compliant_reach" value="0">
                    <input class="form-check-input" type="checkbox" name="compliant_reach" id="compliant_reach" value="1" {{ old('compliant_reach', 0) == 1 || old('compliant_reach') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="compliant_reach">{{ trans('cruds.process.fields.compliant_reach') }}</label>
                </div>
                @if($errors->has('compliant_reach'))
                    <span class="text-danger">{{ $errors->first('compliant_reach') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.process.fields.compliant_reach_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.process.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.process.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.process.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.process.fields.revision_helper') }}</span>
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