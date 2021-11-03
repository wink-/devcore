@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.actionsTemp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('pacsys.actions-temps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.id') }}
                        </th>
                        <td>
                            {{ $actionsTemp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.i_dx') }}
                        </th>
                        <td>
                            {{ $actionsTemp->i_dx }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.record_name') }}
                        </th>
                        <td>
                            {{ $actionsTemp->record_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.form_name') }}
                        </th>
                        <td>
                            {{ $actionsTemp->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.value_name') }}
                        </th>
                        <td>
                            {{ $actionsTemp->value_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.value') }}
                        </th>
                        <td>
                            {{ $actionsTemp->value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.rec_date') }}
                        </th>
                        <td>
                            {{ $actionsTemp->rec_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.act_date') }}
                        </th>
                        <td>
                            {{ $actionsTemp->act_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.complete') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $actionsTemp->complete ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.rec_emp_code') }}
                        </th>
                        <td>
                            {{ $actionsTemp->rec_emp_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.unit') }}
                        </th>
                        <td>
                            {{ $actionsTemp->unit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.act_value') }}
                        </th>
                        <td>
                            {{ $actionsTemp->act_value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.scope_name') }}
                        </th>
                        <td>
                            {{ $actionsTemp->scope_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.comment') }}
                        </th>
                        <td>
                            {{ $actionsTemp->comment }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.tank') }}
                        </th>
                        <td>
                            {{ $actionsTemp->tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $actionsTemp->time_stamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.emp_name') }}
                        </th>
                        <td>
                            {{ $actionsTemp->emp_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.i_dy') }}
                        </th>
                        <td>
                            {{ $actionsTemp->i_dy }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.actionsTemp.fields.value_num') }}
                        </th>
                        <td>
                            {{ $actionsTemp->value_num }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('pacsys.actions-temps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection