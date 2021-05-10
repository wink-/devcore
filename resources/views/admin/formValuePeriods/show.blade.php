@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.formValuePeriod.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-periods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.id') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.name') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.form_name') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_1') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_2') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_3') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_4') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_5') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_6') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_7') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_8') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_9') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_10') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_11') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_12') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_13') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_13 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_14') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_15') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_15 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_16') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_16 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_17') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_17 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_18') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_18 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_19') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_19 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.period_20') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->period_20 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.tank') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValuePeriod.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $formValuePeriod->time_stamp }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-periods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection