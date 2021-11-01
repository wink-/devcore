@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.formValueRange.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-ranges.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.id') }}
                        </th>
                        <td>
                            {{ $formValueRange->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.name') }}
                        </th>
                        <td>
                            {{ $formValueRange->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.form_name') }}
                        </th>
                        <td>
                            {{ $formValueRange->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_1') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_1') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_2') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_2') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_3') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_3') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_4') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_4') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_5') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_5') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_6') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_6') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_7') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_7') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_8') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_8') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_9') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_9') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_10') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_10') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_11') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_11') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_12') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_12') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_13') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_13 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_13') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_13 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_14') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_14') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_15') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_15 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_15') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_15 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_16') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_16 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_16') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_16 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_17') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_17 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_17') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_17 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_18') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_18 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_18') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_18 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_19') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_19 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_19') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_19 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.min_20') }}
                        </th>
                        <td>
                            {{ $formValueRange->min_20 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.max_20') }}
                        </th>
                        <td>
                            {{ $formValueRange->max_20 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.tank') }}
                        </th>
                        <td>
                            {{ $formValueRange->tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueRange.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $formValueRange->time_stamp }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-ranges.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection