@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.record.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.id') }}
                        </th>
                        <td>
                            {{ $record->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.name') }}
                        </th>
                        <td>
                            {{ $record->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.description') }}
                        </th>
                        <td>
                            {{ $record->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.form_name') }}
                        </th>
                        <td>
                            {{ $record->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.form_type') }}
                        </th>
                        <td>
                            {{ $record->form_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.scope_name') }}
                        </th>
                        <td>
                            {{ $record->scope_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.image') }}
                        </th>
                        <td>
                            {{ $record->image }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $record->time_stamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.capacity_old') }}
                        </th>
                        <td>
                            {{ $record->capacity_old }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.capacity_unit') }}
                        </th>
                        <td>
                            {{ $record->capacity_unit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.capacity') }}
                        </th>
                        <td>
                            {{ $record->capacity }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection