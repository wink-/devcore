@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.contact.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("wipsys.contacts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="customer_id">{{ trans('cruds.contact.fields.customer') }}</label>
                <select class="form-control select2 {{ $errors->has('customer') ? 'is-invalid' : '' }}" name="customer_id" id="customer_id">
                    @foreach($customers as $id => $customer)
                        <option value="{{ $id }}" {{ old('customer_id') == $id ? 'selected' : '' }}>{{ $customer }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer'))
                    <span class="text-danger">{{ $errors->first('customer') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_code">{{ trans('cruds.contact.fields.customer_code') }}</label>
                <input class="form-control {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" type="text" name="customer_code" id="customer_code" value="{{ old('customer_code', '') }}">
                @if($errors->has('customer_code'))
                    <span class="text-danger">{{ $errors->first('customer_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_name">{{ trans('cruds.contact.fields.customer_name') }}</label>
                <input class="form-control {{ $errors->has('customer_name') ? 'is-invalid' : '' }}" type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', '') }}">
                @if($errors->has('customer_name'))
                    <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.customer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="first_name">{{ trans('cruds.contact.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}">
                @if($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_name">{{ trans('cruds.contact.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}">
                @if($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.contact.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="extension">{{ trans('cruds.contact.fields.extension') }}</label>
                <input class="form-control {{ $errors->has('extension') ? 'is-invalid' : '' }}" type="text" name="extension" id="extension" value="{{ old('extension', '') }}">
                @if($errors->has('extension'))
                    <span class="text-danger">{{ $errors->first('extension') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.extension_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.contact.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cell">{{ trans('cruds.contact.fields.cell') }}</label>
                <input class="form-control {{ $errors->has('cell') ? 'is-invalid' : '' }}" type="text" name="cell" id="cell" value="{{ old('cell', '') }}">
                @if($errors->has('cell'))
                    <span class="text-danger">{{ $errors->first('cell') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.cell_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fax">{{ trans('cruds.contact.fields.fax') }}</label>
                <input class="form-control {{ $errors->has('fax') ? 'is-invalid' : '' }}" type="text" name="fax" id="fax" value="{{ old('fax', '') }}">
                @if($errors->has('fax'))
                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.fax_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.contact.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.contact.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.revision_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quote_emails">{{ trans('cruds.contact.fields.quote_emails') }}</label>
                <input class="form-control {{ $errors->has('quote_emails') ? 'is-invalid' : '' }}" type="text" name="quote_emails" id="quote_emails" value="{{ old('quote_emails', '') }}">
                @if($errors->has('quote_emails'))
                    <span class="text-danger">{{ $errors->first('quote_emails') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.quote_emails_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('email_quote_print') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="email_quote_print" value="0">
                    <input class="form-check-input" type="checkbox" name="email_quote_print" id="email_quote_print" value="1" {{ old('email_quote_print', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="email_quote_print">{{ trans('cruds.contact.fields.email_quote_print') }}</label>
                </div>
                @if($errors->has('email_quote_print'))
                    <span class="text-danger">{{ $errors->first('email_quote_print') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.email_quote_print_helper') }}</span>
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