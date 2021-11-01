@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.customer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.id') }}
                        </th>
                        <td>
                            {{ $customer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.code') }}
                        </th>
                        <td>
                            {{ $customer->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.name') }}
                        </th>
                        <td>
                            {{ $customer->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.physical_address') }}
                        </th>
                        <td>
                            {{ $customer->physical_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.address_extension') }}
                        </th>
                        <td>
                            {{ $customer->address_extension }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.city') }}
                        </th>
                        <td>
                            {{ $customer->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.state') }}
                        </th>
                        <td>
                            {{ $customer->state }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.zip') }}
                        </th>
                        <td>
                            {{ $customer->zip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.destination_code') }}
                        </th>
                        <td>
                            {{ $customer->destination_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.packing_list_copies') }}
                        </th>
                        <td>
                            {{ $customer->packing_list_copies }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.contact_1') }}
                        </th>
                        <td>
                            {{ $customer->contact_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.company_phone') }}
                        </th>
                        <td>
                            {{ $customer->company_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.extension_1') }}
                        </th>
                        <td>
                            {{ $customer->extension_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.contact_2') }}
                        </th>
                        <td>
                            {{ $customer->contact_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.phone_2') }}
                        </th>
                        <td>
                            {{ $customer->phone_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.extension_2') }}
                        </th>
                        <td>
                            {{ $customer->extension_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.fax') }}
                        </th>
                        <td>
                            {{ $customer->fax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.email') }}
                        </th>
                        <td>
                            {{ $customer->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.invoice_emails') }}
                        </th>
                        <td>
                            {{ $customer->invoice_emails }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.cod') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $customer->cod ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.tax') }}
                        </th>
                        <td>
                            {{ $customer->tax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.note') }}
                        </th>
                        <td>
                            {{ $customer->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.billing_address') }}
                        </th>
                        <td>
                            {{ $customer->billing_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.billing_city') }}
                        </th>
                        <td>
                            {{ $customer->billing_city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.billing_state') }}
                        </th>
                        <td>
                            {{ $customer->billing_state }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.billing_zip') }}
                        </th>
                        <td>
                            {{ $customer->billing_zip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.billing_phone') }}
                        </th>
                        <td>
                            {{ $customer->billing_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.billing_fax') }}
                        </th>
                        <td>
                            {{ $customer->billing_fax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.billing_email') }}
                        </th>
                        <td>
                            {{ $customer->billing_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.ship_to_addressid') }}
                        </th>
                        <td>
                            {{ $customer->ship_to_addressid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.ship_to_address_code') }}
                        </th>
                        <td>
                            {{ $customer->ship_to_address_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.ship_to_address') }}
                        </th>
                        <td>
                            {{ $customer->ship_to_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.ship_to_city') }}
                        </th>
                        <td>
                            {{ $customer->ship_to_city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.ship_to_state') }}
                        </th>
                        <td>
                            {{ $customer->ship_to_state }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.ship_to_zip') }}
                        </th>
                        <td>
                            {{ $customer->ship_to_zip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.ship_to_phone') }}
                        </th>
                        <td>
                            {{ $customer->ship_to_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.ship_to_fax') }}
                        </th>
                        <td>
                            {{ $customer->ship_to_fax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.ship_to_email') }}
                        </th>
                        <td>
                            {{ $customer->ship_to_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $customer->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.revision') }}
                        </th>
                        <td>
                            {{ $customer->revision }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.carrier') }}
                        </th>
                        <td>
                            {{ $customer->carrier->code ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.carrier_code') }}
                        </th>
                        <td>
                            {{ $customer->carrier_code }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#customer_code_destinations" role="tab" data-toggle="tab">
                {{ trans('cruds.destination.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#customer_contacts" role="tab" data-toggle="tab">
                {{ trans('cruds.contact.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#customer_quotes" role="tab" data-toggle="tab">
                {{ trans('cruds.quote.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="customer_code_destinations">
            @includeIf('admin.customers.relationships.customerCodeDestinations', ['destinations' => $customer->customerCodeDestinations])
        </div>
        <div class="tab-pane" role="tabpanel" id="customer_contacts">
            @includeIf('admin.customers.relationships.customerContacts', ['contacts' => $customer->customerContacts])
        </div>
        <div class="tab-pane" role="tabpanel" id="customer_quotes">
            @includeIf('admin.customers.relationships.customerQuotes', ['quotes' => $customer->customerQuotes])
        </div>
    </div>
</div>

@endsection