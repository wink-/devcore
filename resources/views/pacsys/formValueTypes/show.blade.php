@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.formValueType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.id') }}
                        </th>
                        <td>
                            {{ $formValueType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.name') }}
                        </th>
                        <td>
                            {{ $formValueType->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.form_name') }}
                        </th>
                        <td>
                            {{ $formValueType->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_1') }}
                        </th>
                        <td>
                            {{ $formValueType->type_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_2') }}
                        </th>
                        <td>
                            {{ $formValueType->type_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_3') }}
                        </th>
                        <td>
                            {{ $formValueType->type_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_4') }}
                        </th>
                        <td>
                            {{ $formValueType->type_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_5') }}
                        </th>
                        <td>
                            {{ $formValueType->type_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_6') }}
                        </th>
                        <td>
                            {{ $formValueType->type_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_7') }}
                        </th>
                        <td>
                            {{ $formValueType->type_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_8') }}
                        </th>
                        <td>
                            {{ $formValueType->type_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_9') }}
                        </th>
                        <td>
                            {{ $formValueType->type_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_10') }}
                        </th>
                        <td>
                            {{ $formValueType->type_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_11') }}
                        </th>
                        <td>
                            {{ $formValueType->type_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_12') }}
                        </th>
                        <td>
                            {{ $formValueType->type_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_13') }}
                        </th>
                        <td>
                            {{ $formValueType->type_13 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_14') }}
                        </th>
                        <td>
                            {{ $formValueType->type_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_15') }}
                        </th>
                        <td>
                            {{ $formValueType->type_15 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_16') }}
                        </th>
                        <td>
                            {{ $formValueType->type_16 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_17') }}
                        </th>
                        <td>
                            {{ $formValueType->type_17 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_18') }}
                        </th>
                        <td>
                            {{ $formValueType->type_18 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_19') }}
                        </th>
                        <td>
                            {{ $formValueType->type_19 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.type_20') }}
                        </th>
                        <td>
                            {{ $formValueType->type_20 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.tank') }}
                        </th>
                        <td>
                            {{ $formValueType->tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.timestamp') }}
                        </th>
                        <td>
                            {{ $formValueType->timestamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.false') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueType->false ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueType.fields.true') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $formValueType->true ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection