@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.process.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.processes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.process.fields.id') }}
                        </th>
                        <td>
                            {{ $process->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.process.fields.code') }}
                        </th>
                        <td>
                            {{ $process->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.process.fields.name') }}
                        </th>
                        <td>
                            {{ $process->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.process.fields.minimum_lot_charge') }}
                        </th>
                        <td>
                            {{ $process->minimum_lot_charge }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.process.fields.compliant_rohs') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $process->compliant_rohs ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.process.fields.compliant_reach') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $process->compliant_reach ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.process.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $process->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.process.fields.revision') }}
                        </th>
                        <td>
                            {{ $process->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.processes.index') }}">
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
            <a class="nav-link" href="#process_quotes" role="tab" data-toggle="tab">
                {{ trans('cruds.quote.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="process_quotes">
            @includeIf('admin.processes.relationships.processQuotes', ['quotes' => $process->processQuotes])
        </div>
    </div>
</div>

@endsection