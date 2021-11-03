@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.analysi.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('pacsys.analysis.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.id') }}
                        </th>
                        <td>
                            {{ $analysi->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.record_name') }}
                        </th>
                        <td>
                            {{ $analysi->record_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.form_name') }}
                        </th>
                        <td>
                            {{ $analysi->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.date') }}
                        </th>
                        <td>
                            {{ $analysi->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_1') }}
                        </th>
                        <td>
                            {{ $analysi->value_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_2') }}
                        </th>
                        <td>
                            {{ $analysi->value_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_3') }}
                        </th>
                        <td>
                            {{ $analysi->value_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_4') }}
                        </th>
                        <td>
                            {{ $analysi->value_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_5') }}
                        </th>
                        <td>
                            {{ $analysi->value_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_6') }}
                        </th>
                        <td>
                            {{ $analysi->value_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_7') }}
                        </th>
                        <td>
                            {{ $analysi->value_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_8') }}
                        </th>
                        <td>
                            {{ $analysi->value_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_9') }}
                        </th>
                        <td>
                            {{ $analysi->value_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_10') }}
                        </th>
                        <td>
                            {{ $analysi->value_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_11') }}
                        </th>
                        <td>
                            {{ $analysi->value_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_12') }}
                        </th>
                        <td>
                            {{ $analysi->value_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_13') }}
                        </th>
                        <td>
                            {{ $analysi->value_13 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_14') }}
                        </th>
                        <td>
                            {{ $analysi->value_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_15') }}
                        </th>
                        <td>
                            {{ $analysi->value_15 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_16') }}
                        </th>
                        <td>
                            {{ $analysi->value_16 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_17') }}
                        </th>
                        <td>
                            {{ $analysi->value_17 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_18') }}
                        </th>
                        <td>
                            {{ $analysi->value_18 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_19') }}
                        </th>
                        <td>
                            {{ $analysi->value_19 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.value_20') }}
                        </th>
                        <td>
                            {{ $analysi->value_20 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.tank') }}
                        </th>
                        <td>
                            {{ $analysi->tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.emp_code') }}
                        </th>
                        <td>
                            {{ $analysi->emp_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $analysi->time_stamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.delete_visible') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $analysi->delete_visible ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.i_dy') }}
                        </th>
                        <td>
                            {{ $analysi->i_dy }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_1') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_2') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_3') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_4') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_5') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_6') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_7') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_8') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_9') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_10') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_11') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_12') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_13') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_13 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_14') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_15') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_15 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_16') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_16 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_17') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_17 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_18') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_18 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_19') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_19 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysi.fields.act_value_20') }}
                        </th>
                        <td>
                            {{ $analysi->act_value_20 }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('pacsys.analysis.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection