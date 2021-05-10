@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.customer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.customers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.customer.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}" required>
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.customer.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="physical_address">{{ trans('cruds.customer.fields.physical_address') }}</label>
                <input class="form-control {{ $errors->has('physical_address') ? 'is-invalid' : '' }}" type="text" name="physical_address" id="physical_address" value="{{ old('physical_address', '') }}">
                @if($errors->has('physical_address'))
                    <span class="text-danger">{{ $errors->first('physical_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.physical_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address_extension">{{ trans('cruds.customer.fields.address_extension') }}</label>
                <input class="form-control {{ $errors->has('address_extension') ? 'is-invalid' : '' }}" type="text" name="address_extension" id="address_extension" value="{{ old('address_extension', '') }}">
                @if($errors->has('address_extension'))
                    <span class="text-danger">{{ $errors->first('address_extension') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.address_extension_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city">{{ trans('cruds.customer.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}">
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="state">{{ trans('cruds.customer.fields.state') }}</label>
                <input class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" type="text" name="state" id="state" value="{{ old('state', '') }}">
                @if($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="zip">{{ trans('cruds.customer.fields.zip') }}</label>
                <input class="form-control {{ $errors->has('zip') ? 'is-invalid' : '' }}" type="text" name="zip" id="zip" value="{{ old('zip', '') }}">
                @if($errors->has('zip'))
                    <span class="text-danger">{{ $errors->first('zip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.zip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="destination_code">{{ trans('cruds.customer.fields.destination_code') }}</label>
                <input class="form-control {{ $errors->has('destination_code') ? 'is-invalid' : '' }}" type="text" name="destination_code" id="destination_code" value="{{ old('destination_code', '') }}">
                @if($errors->has('destination_code'))
                    <span class="text-danger">{{ $errors->first('destination_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.destination_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="packing_list_copies">{{ trans('cruds.customer.fields.packing_list_copies') }}</label>
                <input class="form-control {{ $errors->has('packing_list_copies') ? 'is-invalid' : '' }}" type="number" name="packing_list_copies" id="packing_list_copies" value="{{ old('packing_list_copies', '2') }}" step="1">
                @if($errors->has('packing_list_copies'))
                    <span class="text-danger">{{ $errors->first('packing_list_copies') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.packing_list_copies_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_1">{{ trans('cruds.customer.fields.contact_1') }}</label>
                <input class="form-control {{ $errors->has('contact_1') ? 'is-invalid' : '' }}" type="text" name="contact_1" id="contact_1" value="{{ old('contact_1', '') }}">
                @if($errors->has('contact_1'))
                    <span class="text-danger">{{ $errors->first('contact_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.contact_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_phone">{{ trans('cruds.customer.fields.company_phone') }}</label>
                <input class="form-control {{ $errors->has('company_phone') ? 'is-invalid' : '' }}" type="text" name="company_phone" id="company_phone" value="{{ old('company_phone', '') }}">
                @if($errors->has('company_phone'))
                    <span class="text-danger">{{ $errors->first('company_phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.company_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="extension_1">{{ trans('cruds.customer.fields.extension_1') }}</label>
                <input class="form-control {{ $errors->has('extension_1') ? 'is-invalid' : '' }}" type="text" name="extension_1" id="extension_1" value="{{ old('extension_1', '') }}">
                @if($errors->has('extension_1'))
                    <span class="text-danger">{{ $errors->first('extension_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.extension_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_2">{{ trans('cruds.customer.fields.phone_2') }}</label>
                <input class="form-control {{ $errors->has('phone_2') ? 'is-invalid' : '' }}" type="text" name="phone_2" id="phone_2" value="{{ old('phone_2', '') }}">
                @if($errors->has('phone_2'))
                    <span class="text-danger">{{ $errors->first('phone_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.phone_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="extension_2">{{ trans('cruds.customer.fields.extension_2') }}</label>
                <input class="form-control {{ $errors->has('extension_2') ? 'is-invalid' : '' }}" type="text" name="extension_2" id="extension_2" value="{{ old('extension_2', '') }}">
                @if($errors->has('extension_2'))
                    <span class="text-danger">{{ $errors->first('extension_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.extension_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fax">{{ trans('cruds.customer.fields.fax') }}</label>
                <input class="form-control {{ $errors->has('fax') ? 'is-invalid' : '' }}" type="text" name="fax" id="fax" value="{{ old('fax', '') }}">
                @if($errors->has('fax'))
                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.fax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.customer.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="invoice_emails">{{ trans('cruds.customer.fields.invoice_emails') }}</label>
                <input class="form-control {{ $errors->has('invoice_emails') ? 'is-invalid' : '' }}" type="text" name="invoice_emails" id="invoice_emails" value="{{ old('invoice_emails', '') }}">
                @if($errors->has('invoice_emails'))
                    <span class="text-danger">{{ $errors->first('invoice_emails') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.invoice_emails_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('cod') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="cod" value="0">
                    <input class="form-check-input" type="checkbox" name="cod" id="cod" value="1" {{ old('cod', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="cod">{{ trans('cruds.customer.fields.cod') }}</label>
                </div>
                @if($errors->has('cod'))
                    <span class="text-danger">{{ $errors->first('cod') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.cod_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tax">{{ trans('cruds.customer.fields.tax') }}</label>
                <input class="form-control {{ $errors->has('tax') ? 'is-invalid' : '' }}" type="text" name="tax" id="tax" value="{{ old('tax', '') }}">
                @if($errors->has('tax'))
                    <span class="text-danger">{{ $errors->first('tax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.tax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.customer.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="billing_address">{{ trans('cruds.customer.fields.billing_address') }}</label>
                <input class="form-control {{ $errors->has('billing_address') ? 'is-invalid' : '' }}" type="text" name="billing_address" id="billing_address" value="{{ old('billing_address', '') }}">
                @if($errors->has('billing_address'))
                    <span class="text-danger">{{ $errors->first('billing_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.billing_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="billing_city">{{ trans('cruds.customer.fields.billing_city') }}</label>
                <input class="form-control {{ $errors->has('billing_city') ? 'is-invalid' : '' }}" type="text" name="billing_city" id="billing_city" value="{{ old('billing_city', '') }}">
                @if($errors->has('billing_city'))
                    <span class="text-danger">{{ $errors->first('billing_city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.billing_city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="billing_state">{{ trans('cruds.customer.fields.billing_state') }}</label>
                <input class="form-control {{ $errors->has('billing_state') ? 'is-invalid' : '' }}" type="text" name="billing_state" id="billing_state" value="{{ old('billing_state', '') }}">
                @if($errors->has('billing_state'))
                    <span class="text-danger">{{ $errors->first('billing_state') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.billing_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="billing_zip">{{ trans('cruds.customer.fields.billing_zip') }}</label>
                <input class="form-control {{ $errors->has('billing_zip') ? 'is-invalid' : '' }}" type="text" name="billing_zip" id="billing_zip" value="{{ old('billing_zip', '') }}">
                @if($errors->has('billing_zip'))
                    <span class="text-danger">{{ $errors->first('billing_zip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.billing_zip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="billing_phone">{{ trans('cruds.customer.fields.billing_phone') }}</label>
                <input class="form-control {{ $errors->has('billing_phone') ? 'is-invalid' : '' }}" type="text" name="billing_phone" id="billing_phone" value="{{ old('billing_phone', '') }}">
                @if($errors->has('billing_phone'))
                    <span class="text-danger">{{ $errors->first('billing_phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.billing_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="billing_fax">{{ trans('cruds.customer.fields.billing_fax') }}</label>
                <input class="form-control {{ $errors->has('billing_fax') ? 'is-invalid' : '' }}" type="text" name="billing_fax" id="billing_fax" value="{{ old('billing_fax', '') }}">
                @if($errors->has('billing_fax'))
                    <span class="text-danger">{{ $errors->first('billing_fax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.billing_fax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="billing_email">{{ trans('cruds.customer.fields.billing_email') }}</label>
                <input class="form-control {{ $errors->has('billing_email') ? 'is-invalid' : '' }}" type="text" name="billing_email" id="billing_email" value="{{ old('billing_email', '') }}">
                @if($errors->has('billing_email'))
                    <span class="text-danger">{{ $errors->first('billing_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.billing_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ship_to_addressid">{{ trans('cruds.customer.fields.ship_to_addressid') }}</label>
                <input class="form-control {{ $errors->has('ship_to_addressid') ? 'is-invalid' : '' }}" type="number" name="ship_to_addressid" id="ship_to_addressid" value="{{ old('ship_to_addressid', '') }}" step="1">
                @if($errors->has('ship_to_addressid'))
                    <span class="text-danger">{{ $errors->first('ship_to_addressid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.ship_to_addressid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ship_to_address_code">{{ trans('cruds.customer.fields.ship_to_address_code') }}</label>
                <input class="form-control {{ $errors->has('ship_to_address_code') ? 'is-invalid' : '' }}" type="text" name="ship_to_address_code" id="ship_to_address_code" value="{{ old('ship_to_address_code', '') }}">
                @if($errors->has('ship_to_address_code'))
                    <span class="text-danger">{{ $errors->first('ship_to_address_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.ship_to_address_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ship_to_address">{{ trans('cruds.customer.fields.ship_to_address') }}</label>
                <input class="form-control {{ $errors->has('ship_to_address') ? 'is-invalid' : '' }}" type="text" name="ship_to_address" id="ship_to_address" value="{{ old('ship_to_address', '') }}">
                @if($errors->has('ship_to_address'))
                    <span class="text-danger">{{ $errors->first('ship_to_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.ship_to_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ship_to_city">{{ trans('cruds.customer.fields.ship_to_city') }}</label>
                <input class="form-control {{ $errors->has('ship_to_city') ? 'is-invalid' : '' }}" type="text" name="ship_to_city" id="ship_to_city" value="{{ old('ship_to_city', '') }}">
                @if($errors->has('ship_to_city'))
                    <span class="text-danger">{{ $errors->first('ship_to_city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.ship_to_city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ship_to_state">{{ trans('cruds.customer.fields.ship_to_state') }}</label>
                <input class="form-control {{ $errors->has('ship_to_state') ? 'is-invalid' : '' }}" type="text" name="ship_to_state" id="ship_to_state" value="{{ old('ship_to_state', '') }}">
                @if($errors->has('ship_to_state'))
                    <span class="text-danger">{{ $errors->first('ship_to_state') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.ship_to_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ship_to_zip">{{ trans('cruds.customer.fields.ship_to_zip') }}</label>
                <input class="form-control {{ $errors->has('ship_to_zip') ? 'is-invalid' : '' }}" type="text" name="ship_to_zip" id="ship_to_zip" value="{{ old('ship_to_zip', '') }}">
                @if($errors->has('ship_to_zip'))
                    <span class="text-danger">{{ $errors->first('ship_to_zip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.ship_to_zip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ship_to_phone">{{ trans('cruds.customer.fields.ship_to_phone') }}</label>
                <input class="form-control {{ $errors->has('ship_to_phone') ? 'is-invalid' : '' }}" type="text" name="ship_to_phone" id="ship_to_phone" value="{{ old('ship_to_phone', '') }}">
                @if($errors->has('ship_to_phone'))
                    <span class="text-danger">{{ $errors->first('ship_to_phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.ship_to_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ship_to_fax">{{ trans('cruds.customer.fields.ship_to_fax') }}</label>
                <input class="form-control {{ $errors->has('ship_to_fax') ? 'is-invalid' : '' }}" type="text" name="ship_to_fax" id="ship_to_fax" value="{{ old('ship_to_fax', '') }}">
                @if($errors->has('ship_to_fax'))
                    <span class="text-danger">{{ $errors->first('ship_to_fax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.ship_to_fax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ship_to_email">{{ trans('cruds.customer.fields.ship_to_email') }}</label>
                <input class="form-control {{ $errors->has('ship_to_email') ? 'is-invalid' : '' }}" type="text" name="ship_to_email" id="ship_to_email" value="{{ old('ship_to_email', '') }}">
                @if($errors->has('ship_to_email'))
                    <span class="text-danger">{{ $errors->first('ship_to_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.ship_to_email_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.customer.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.customer.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.revision_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="carrier_id">{{ trans('cruds.customer.fields.carrier') }}</label>
                <select class="form-control select2 {{ $errors->has('carrier') ? 'is-invalid' : '' }}" name="carrier_id" id="carrier_id">
                    @foreach($carriers as $id => $carrier)
                        <option value="{{ $id }}" {{ old('carrier_id') == $id ? 'selected' : '' }}>{{ $carrier }}</option>
                    @endforeach
                </select>
                @if($errors->has('carrier'))
                    <span class="text-danger">{{ $errors->first('carrier') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.carrier_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="carrier_code">{{ trans('cruds.customer.fields.carrier_code') }}</label>
                <input class="form-control {{ $errors->has('carrier_code') ? 'is-invalid' : '' }}" type="text" name="carrier_code" id="carrier_code" value="{{ old('carrier_code', '') }}">
                @if($errors->has('carrier_code'))
                    <span class="text-danger">{{ $errors->first('carrier_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.customer.fields.carrier_code_helper') }}</span>
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