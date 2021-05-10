@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.action.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.actions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.id') }}
                        </th>
                        <td>
                            {{ $action->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.i_dx') }}
                        </th>
                        <td>
                            {{ $action->i_dx }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.record_name') }}
                        </th>
                        <td>
                            {{ $action->record_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.form_name') }}
                        </th>
                        <td>
                            {{ $action->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.value_name') }}
                        </th>
                        <td>
                            {{ $action->value_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.value') }}
                        </th>
                        <td>
                            {{ $action->value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.rec_date') }}
                        </th>
                        <td>
                            {{ $action->rec_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.act_date') }}
                        </th>
                        <td>
                            {{ $action->act_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.complete') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $action->complete ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.rec_emp_code') }}
                        </th>
                        <td>
                            {{ $action->rec_emp_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.unit') }}
                        </th>
                        <td>
                            {{ $action->unit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.act_value') }}
                        </th>
                        <td>
                            {{ $action->act_value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.scope_name') }}
                        </th>
                        <td>
                            {{ $action->scope_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.comment') }}
                        </th>
                        <td>
                            {{ $action->comment }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.tank') }}
                        </th>
                        <td>
                            {{ $action->tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $action->time_stamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.emp_name') }}
                        </th>
                        <td>
                            {{ $action->emp_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.i_dy') }}
                        </th>
                        <td>
                            {{ $action->i_dy }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.value_num') }}
                        </th>
                        <td>
                            {{ $action->value_num }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.actions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection