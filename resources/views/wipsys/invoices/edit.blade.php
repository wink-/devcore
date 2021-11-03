@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.invoice.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.invoices.update", [$invoice->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="number">{{ trans('cruds.invoice.fields.number') }}</label>
                <input class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" type="number" name="number" id="number" value="{{ old('number', $invoice->number) }}" step="1">
                @if($errors->has('number'))
                    <span class="text-danger">{{ $errors->first('number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_code">{{ trans('cruds.invoice.fields.customer_code') }}</label>
                <input class="form-control {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" type="text" name="customer_code" id="customer_code" value="{{ old('customer_code', $invoice->customer_code) }}">
                @if($errors->has('customer_code'))
                    <span class="text-danger">{{ $errors->first('customer_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_purchase_order">{{ trans('cruds.invoice.fields.customer_purchase_order') }}</label>
                <input class="form-control {{ $errors->has('customer_purchase_order') ? 'is-invalid' : '' }}" type="text" name="customer_purchase_order" id="customer_purchase_order" value="{{ old('customer_purchase_order', $invoice->customer_purchase_order) }}">
                @if($errors->has('customer_purchase_order'))
                    <span class="text-danger">{{ $errors->first('customer_purchase_order') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.customer_purchase_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date">{{ trans('cruds.invoice.fields.date') }}</label>
                <input class="form-control datetime {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date', $invoice->date) }}">
                @if($errors->has('date'))
                    <span class="text-danger">{{ $errors->first('date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.invoice.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $invoice->note) }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emails">{{ trans('cruds.invoice.fields.emails') }}</label>
                <input class="form-control {{ $errors->has('emails') ? 'is-invalid' : '' }}" type="text" name="emails" id="emails" value="{{ old('emails', $invoice->emails) }}">
                @if($errors->has('emails'))
                    <span class="text-danger">{{ $errors->first('emails') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.emails_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('printed') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="printed" value="0">
                    <input class="form-check-input" type="checkbox" name="printed" id="printed" value="1" {{ $invoice->printed || old('printed', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="printed">{{ trans('cruds.invoice.fields.printed') }}</label>
                </div>
                @if($errors->has('printed'))
                    <span class="text-danger">{{ $errors->first('printed') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.printed_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="session">{{ trans('cruds.invoice.fields.session') }}</label>
                <input class="form-control {{ $errors->has('session') ? 'is-invalid' : '' }}" type="text" name="session" id="session" value="{{ old('session', $invoice->session) }}">
                @if($errors->has('session'))
                    <span class="text-danger">{{ $errors->first('session') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.session_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $invoice->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.invoice.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.invoice.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $invoice->revision) }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.revision_helper') }}</span>
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