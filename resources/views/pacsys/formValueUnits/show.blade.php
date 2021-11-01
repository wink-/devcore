@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.formValueUnit.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-units.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.id') }}
                        </th>
                        <td>
                            {{ $formValueUnit->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.name') }}
                        </th>
                        <td>
                            {{ $formValueUnit->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.form_name') }}
                        </th>
                        <td>
                            {{ $formValueUnit->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_1') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_2') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_3') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_4') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_5') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_6') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_7') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_8') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_9') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_10') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_11') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_12') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_13') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_13 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_14') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_15') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_15 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_16') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_16 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_17') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_17 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_18') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_18 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_19') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_19 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.unit_20') }}
                        </th>
                        <td>
                            {{ $formValueUnit->unit_20 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.tank') }}
                        </th>
                        <td>
                            {{ $formValueUnit->tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueUnit.fields.timestamp') }}
                        </th>
                        <td>
                            {{ $formValueUnit->timestamp }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-units.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection