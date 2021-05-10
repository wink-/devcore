@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.formValueAction.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-actions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.id') }}
                        </th>
                        <td>
                            {{ $formValueAction->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.name') }}
                        </th>
                        <td>
                            {{ $formValueAction->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.form_name') }}
                        </th>
                        <td>
                            {{ $formValueAction->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_1') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_2') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_2 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_3') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_3 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_4') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_4 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_5') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_5 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_6') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_6 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_7') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_7 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_8') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_8 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_9') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_9 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_10') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_10 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_11') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_11 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_12') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_12 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_13') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_13 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_14') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_14 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_15') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_15 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_16') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_16 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_17') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_17 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_18') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_18 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_19') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_19 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.action_20') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueAction->action_20 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.tank') }}
                        </th>
                        <td>
                            {{ $formValueAction->tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueAction.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $formValueAction->time_stamp }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-actions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection