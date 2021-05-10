@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.analysisNew.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.analysis-news.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.id') }}
                        </th>
                        <td>
                            {{ $analysisNew->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.record_name') }}
                        </th>
                        <td>
                            {{ $analysisNew->record_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.form_name') }}
                        </th>
                        <td>
                            {{ $analysisNew->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.date') }}
                        </th>
                        <td>
                            {{ $analysisNew->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_1') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_2') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_3') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_4') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_5') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_6') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_7') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_8') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_9') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_10') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_11') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_12') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_13') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_13 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_14') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_15') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_15 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_16') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_16 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_17') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_17 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_18') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_18 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_19') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_19 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.value_20') }}
                        </th>
                        <td>
                            {{ $analysisNew->value_20 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.tank') }}
                        </th>
                        <td>
                            {{ $analysisNew->tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.emp_code') }}
                        </th>
                        <td>
                            {{ $analysisNew->emp_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $analysisNew->time_stamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.delete_visible') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $analysisNew->delete_visible ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.analysisNew.fields.label') }}
                        </th>
                        <td>
                            {{ $analysisNew->label }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.analysis-news.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection