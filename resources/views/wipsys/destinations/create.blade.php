@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.destination.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.destinations.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.destination.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}" required>
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.destination.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="physical_address">{{ trans('cruds.destination.fields.physical_address') }}</label>
                <input class="form-control {{ $errors->has('physical_address') ? 'is-invalid' : '' }}" type="text" name="physical_address" id="physical_address" value="{{ old('physical_address', '') }}">
                @if($errors->has('physical_address'))
                    <span class="text-danger">{{ $errors->first('physical_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.physical_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address_extension">{{ trans('cruds.destination.fields.address_extension') }}</label>
                <input class="form-control {{ $errors->has('address_extension') ? 'is-invalid' : '' }}" type="text" name="address_extension" id="address_extension" value="{{ old('address_extension', '') }}">
                @if($errors->has('address_extension'))
                    <span class="text-danger">{{ $errors->first('address_extension') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.address_extension_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city">{{ trans('cruds.destination.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}">
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="state">{{ trans('cruds.destination.fields.state') }}</label>
                <input class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" type="text" name="state" id="state" value="{{ old('state', '') }}">
                @if($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="zip">{{ trans('cruds.destination.fields.zip') }}</label>
                <input class="form-control {{ $errors->has('zip') ? 'is-invalid' : '' }}" type="text" name="zip" id="zip" value="{{ old('zip', '') }}">
                @if($errors->has('zip'))
                    <span class="text-danger">{{ $errors->first('zip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.zip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_code_id">{{ trans('cruds.destination.fields.customer_code') }}</label>
                <select class="form-control select2 {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" name="customer_code_id" id="customer_code_id">
                    @foreach($customer_codes as $id => $customer_code)
                        <option value="{{ $id }}" {{ old('customer_code_id') == $id ? 'selected' : '' }}>{{ $customer_code }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer_code'))
                    <span class="text-danger">{{ $errors->first('customer_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="CONTACT1">{{ trans('cruds.destination.fields.CONTACT1') }}</label>
                <input class="form-control {{ $errors->has('CONTACT1') ? 'is-invalid' : '' }}" type="text" name="CONTACT1" id="CONTACT1" value="{{ old('CONTACT1', '') }}">
                @if($errors->has('CONTACT1'))
                    <span class="text-danger">{{ $errors->first('CONTACT1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.CONTACT1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_phone">{{ trans('cruds.destination.fields.company_phone') }}</label>
                <input class="form-control {{ $errors->has('company_phone') ? 'is-invalid' : '' }}" type="text" name="company_phone" id="company_phone" value="{{ old('company_phone', '') }}">
                @if($errors->has('company_phone'))
                    <span class="text-danger">{{ $errors->first('company_phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.company_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_1">{{ trans('cruds.destination.fields.phone_1') }}</label>
                <input class="form-control {{ $errors->has('phone_1') ? 'is-invalid' : '' }}" type="text" name="phone_1" id="phone_1" value="{{ old('phone_1', '') }}">
                @if($errors->has('phone_1'))
                    <span class="text-danger">{{ $errors->first('phone_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.phone_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="EXTENSION1">{{ trans('cruds.destination.fields.EXTENSION1') }}</label>
                <input class="form-control {{ $errors->has('EXTENSION1') ? 'is-invalid' : '' }}" type="text" name="EXTENSION1" id="EXTENSION1" value="{{ old('EXTENSION1', '') }}">
                @if($errors->has('EXTENSION1'))
                    <span class="text-danger">{{ $errors->first('EXTENSION1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.EXTENSION1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="CONTACT2">{{ trans('cruds.destination.fields.CONTACT2') }}</label>
                <input class="form-control {{ $errors->has('CONTACT2') ? 'is-invalid' : '' }}" type="text" name="CONTACT2" id="CONTACT2" value="{{ old('CONTACT2', '') }}">
                @if($errors->has('CONTACT2'))
                    <span class="text-danger">{{ $errors->first('CONTACT2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.CONTACT2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="PHONE2">{{ trans('cruds.destination.fields.PHONE2') }}</label>
                <input class="form-control {{ $errors->has('PHONE2') ? 'is-invalid' : '' }}" type="text" name="PHONE2" id="PHONE2" value="{{ old('PHONE2', '') }}">
                @if($errors->has('PHONE2'))
                    <span class="text-danger">{{ $errors->first('PHONE2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.PHONE2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="EXTENSION2">{{ trans('cruds.destination.fields.EXTENSION2') }}</label>
                <input class="form-control {{ $errors->has('EXTENSION2') ? 'is-invalid' : '' }}" type="text" name="EXTENSION2" id="EXTENSION2" value="{{ old('EXTENSION2', '') }}">
                @if($errors->has('EXTENSION2'))
                    <span class="text-danger">{{ $errors->first('EXTENSION2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.EXTENSION2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fax">{{ trans('cruds.destination.fields.fax') }}</label>
                <input class="form-control {{ $errors->has('fax') ? 'is-invalid' : '' }}" type="text" name="fax" id="fax" value="{{ old('fax', '') }}">
                @if($errors->has('fax'))
                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.fax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.destination.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.destination.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.destination.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.destination.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.revision_helper') }}</span>
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