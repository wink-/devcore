@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.up.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("wipsys.ups.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tracking_number">{{ trans('cruds.up.fields.tracking_number') }}</label>
                <input class="form-control {{ $errors->has('tracking_number') ? 'is-invalid' : '' }}" type="text" name="tracking_number" id="tracking_number" value="{{ old('tracking_number', '') }}">
                @if($errors->has('tracking_number'))
                    <span class="text-danger">{{ $errors->first('tracking_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.tracking_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="receiver_name">{{ trans('cruds.up.fields.receiver_name') }}</label>
                <input class="form-control {{ $errors->has('receiver_name') ? 'is-invalid' : '' }}" type="text" name="receiver_name" id="receiver_name" value="{{ old('receiver_name', '') }}">
                @if($errors->has('receiver_name'))
                    <span class="text-danger">{{ $errors->first('receiver_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.receiver_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="shipment_process_timestamp">{{ trans('cruds.up.fields.shipment_process_timestamp') }}</label>
                <input class="form-control {{ $errors->has('shipment_process_timestamp') ? 'is-invalid' : '' }}" type="text" name="shipment_process_timestamp" id="shipment_process_timestamp" value="{{ old('shipment_process_timestamp', '') }}">
                @if($errors->has('shipment_process_timestamp'))
                    <span class="text-danger">{{ $errors->first('shipment_process_timestamp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.shipment_process_timestamp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="service_type">{{ trans('cruds.up.fields.service_type') }}</label>
                <input class="form-control {{ $errors->has('service_type') ? 'is-invalid' : '' }}" type="text" name="service_type" id="service_type" value="{{ old('service_type', '') }}">
                @if($errors->has('service_type'))
                    <span class="text-danger">{{ $errors->first('service_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.service_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="weight">{{ trans('cruds.up.fields.weight') }}</label>
                <input class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" type="number" name="weight" id="weight" value="{{ old('weight', '') }}" step="0.01">
                @if($errors->has('weight'))
                    <span class="text-danger">{{ $errors->first('weight') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ref_1">{{ trans('cruds.up.fields.ref_1') }}</label>
                <input class="form-control {{ $errors->has('ref_1') ? 'is-invalid' : '' }}" type="text" name="ref_1" id="ref_1" value="{{ old('ref_1', '') }}">
                @if($errors->has('ref_1'))
                    <span class="text-danger">{{ $errors->first('ref_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.ref_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ref_2">{{ trans('cruds.up.fields.ref_2') }}</label>
                <input class="form-control {{ $errors->has('ref_2') ? 'is-invalid' : '' }}" type="text" name="ref_2" id="ref_2" value="{{ old('ref_2', '') }}">
                @if($errors->has('ref_2'))
                    <span class="text-danger">{{ $errors->first('ref_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.ref_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ref_3">{{ trans('cruds.up.fields.ref_3') }}</label>
                <input class="form-control {{ $errors->has('ref_3') ? 'is-invalid' : '' }}" type="text" name="ref_3" id="ref_3" value="{{ old('ref_3', '') }}">
                @if($errors->has('ref_3'))
                    <span class="text-danger">{{ $errors->first('ref_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.ref_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ref_4">{{ trans('cruds.up.fields.ref_4') }}</label>
                <input class="form-control {{ $errors->has('ref_4') ? 'is-invalid' : '' }}" type="text" name="ref_4" id="ref_4" value="{{ old('ref_4', '') }}">
                @if($errors->has('ref_4'))
                    <span class="text-danger">{{ $errors->first('ref_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.ref_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ref_5">{{ trans('cruds.up.fields.ref_5') }}</label>
                <input class="form-control {{ $errors->has('ref_5') ? 'is-invalid' : '' }}" type="text" name="ref_5" id="ref_5" value="{{ old('ref_5', '') }}">
                @if($errors->has('ref_5'))
                    <span class="text-danger">{{ $errors->first('ref_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.ref_5_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.up.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.up.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.up.fields.revision_helper') }}</span>
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