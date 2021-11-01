@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pdRecord.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pd-records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pdRecord.fields.id') }}
                        </th>
                        <td>
                            {{ $pdRecord->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdRecord.fields.active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $pdRecord->active ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdRecord.fields.name') }}
                        </th>
                        <td>
                            {{ $pdRecord->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdRecord.fields.logger') }}
                        </th>
                        <td>
                            {{ $pdRecord->logger->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdRecord.fields.record_type') }}
                        </th>
                        <td>
                            {{ $pdRecord->record_type->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdRecord.fields.command') }}
                        </th>
                        <td>
                            {{ $pdRecord->command }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdRecord.fields.multiplier') }}
                        </th>
                        <td>
                            {{ $pdRecord->multiplier }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdRecord.fields.description') }}
                        </th>
                        <td>
                            {{ $pdRecord->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdRecord.fields.unit') }}
                        </th>
                        <td>
                            {{ $pdRecord->unit->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdRecord.fields.graph_y_lower') }}
                        </th>
                        <td>
                            {{ $pdRecord->graph_y_lower }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdRecord.fields.graph_y_upper') }}
                        </th>
                        <td>
                            {{ $pdRecord->graph_y_upper }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pd-records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection