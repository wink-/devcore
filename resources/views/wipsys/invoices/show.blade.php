@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.invoice.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.invoices.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.invoice.fields.id') }}
                        </th>
                        <td>
                            {{ $invoice->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invoice.fields.number') }}
                        </th>
                        <td>
                            {{ $invoice->number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invoice.fields.customer_code') }}
                        </th>
                        <td>
                            {{ $invoice->customer_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invoice.fields.customer_purchase_order') }}
                        </th>
                        <td>
                            {{ $invoice->customer_purchase_order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invoice.fields.date') }}
                        </th>
                        <td>
                            {{ $invoice->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invoice.fields.note') }}
                        </th>
                        <td>
                            {{ $invoice->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invoice.fields.emails') }}
                        </th>
                        <td>
                            {{ $invoice->emails }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invoice.fields.printed') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $invoice->printed ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invoice.fields.session') }}
                        </th>
                        <td>
                            {{ $invoice->session }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invoice.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $invoice->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invoice.fields.revision') }}
                        </th>
                        <td>
                            {{ $invoice->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.invoices.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection