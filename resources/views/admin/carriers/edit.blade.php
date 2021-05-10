@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.carrier.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.carriers.update", [$carrier->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.carrier.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $carrier->code) }}" required>
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.carrier.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $carrier->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="physical_address">{{ trans('cruds.carrier.fields.physical_address') }}</label>
                <input class="form-control {{ $errors->has('physical_address') ? 'is-invalid' : '' }}" type="text" name="physical_address" id="physical_address" value="{{ old('physical_address', $carrier->physical_address) }}">
                @if($errors->has('physical_address'))
                    <span class="text-danger">{{ $errors->first('physical_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.physical_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address_extension">{{ trans('cruds.carrier.fields.address_extension') }}</label>
                <input class="form-control {{ $errors->has('address_extension') ? 'is-invalid' : '' }}" type="text" name="address_extension" id="address_extension" value="{{ old('address_extension', $carrier->address_extension) }}">
                @if($errors->has('address_extension'))
                    <span class="text-danger">{{ $errors->first('address_extension') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.address_extension_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_address">{{ trans('cruds.carrier.fields.payment_address') }}</label>
                <input class="form-control {{ $errors->has('payment_address') ? 'is-invalid' : '' }}" type="text" name="payment_address" id="payment_address" value="{{ old('payment_address', $carrier->payment_address) }}">
                @if($errors->has('payment_address'))
                    <span class="text-danger">{{ $errors->first('payment_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.payment_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city">{{ trans('cruds.carrier.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', $carrier->city) }}">
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="state">{{ trans('cruds.carrier.fields.state') }}</label>
                <input class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" type="text" name="state" id="state" value="{{ old('state', $carrier->state) }}">
                @if($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="zip">{{ trans('cruds.carrier.fields.zip') }}</label>
                <input class="form-control {{ $errors->has('zip') ? 'is-invalid' : '' }}" type="text" name="zip" id="zip" value="{{ old('zip', $carrier->zip) }}">
                @if($errors->has('zip'))
                    <span class="text-danger">{{ $errors->first('zip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.zip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.carrier.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $carrier->email) }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_phone">{{ trans('cruds.carrier.fields.company_phone') }}</label>
                <input class="form-control {{ $errors->has('company_phone') ? 'is-invalid' : '' }}" type="text" name="company_phone" id="company_phone" value="{{ old('company_phone', $carrier->company_phone) }}">
                @if($errors->has('company_phone'))
                    <span class="text-danger">{{ $errors->first('company_phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.company_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fax">{{ trans('cruds.carrier.fields.fax') }}</label>
                <input class="form-control {{ $errors->has('fax') ? 'is-invalid' : '' }}" type="text" name="fax" id="fax" value="{{ old('fax', $carrier->fax) }}">
                @if($errors->has('fax'))
                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.fax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.carrier.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $carrier->note) }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $carrier->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.carrier.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.carrier.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $carrier->revision) }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carrier.fields.revision_helper') }}</span>
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