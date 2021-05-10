@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.formValueName.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-names.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.id') }}
                        </th>
                        <td>
                            {{ $formValueName->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name') }}
                        </th>
                        <td>
                            {{ $formValueName->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.form_name') }}
                        </th>
                        <td>
                            {{ $formValueName->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_1') }}
                        </th>
                        <td>
                            {{ $formValueName->name_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_2') }}
                        </th>
                        <td>
                            {{ $formValueName->name_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_3') }}
                        </th>
                        <td>
                            {{ $formValueName->name_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_4') }}
                        </th>
                        <td>
                            {{ $formValueName->name_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_5') }}
                        </th>
                        <td>
                            {{ $formValueName->name_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_6') }}
                        </th>
                        <td>
                            {{ $formValueName->name_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_7') }}
                        </th>
                        <td>
                            {{ $formValueName->name_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_8') }}
                        </th>
                        <td>
                            {{ $formValueName->name_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_9') }}
                        </th>
                        <td>
                            {{ $formValueName->name_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_10') }}
                        </th>
                        <td>
                            {{ $formValueName->name_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_11') }}
                        </th>
                        <td>
                            {{ $formValueName->name_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_12') }}
                        </th>
                        <td>
                            {{ $formValueName->name_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_13') }}
                        </th>
                        <td>
                            {{ $formValueName->name_13 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_14') }}
                        </th>
                        <td>
                            {{ $formValueName->name_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_15') }}
                        </th>
                        <td>
                            {{ $formValueName->name_15 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_16') }}
                        </th>
                        <td>
                            {{ $formValueName->name_16 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_17') }}
                        </th>
                        <td>
                            {{ $formValueName->name_17 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_18') }}
                        </th>
                        <td>
                            {{ $formValueName->name_18 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_19') }}
                        </th>
                        <td>
                            {{ $formValueName->name_19 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.name_20') }}
                        </th>
                        <td>
                            {{ $formValueName->name_20 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.tank') }}
                        </th>
                        <td>
                            {{ $formValueName->tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $formValueName->time_stamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueName.fields.blank') }}
                        </th>
                        <td>
                            {{ $formValueName->blank }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-names.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection