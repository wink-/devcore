@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.formValueVisible.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-visibles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.id') }}
                        </th>
                        <td>
                            {{ $formValueVisible->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.name') }}
                        </th>
                        <td>
                            {{ $formValueVisible->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.form_name') }}
                        </th>
                        <td>
                            {{ $formValueVisible->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_1') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_2') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_3') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_4') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_5') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_6') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_7') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_8') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_9') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_10') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_11') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_12') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_13') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_13 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_14') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_14 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_15') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_15 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_16') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_16 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_17') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_17 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_18') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_18 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_19') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_19 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_20') }}
                        </th>
                        <td>
                            {{ $formValueVisible->visible_20 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.tank') }}
                        </th>
                        <td>
                            {{ $formValueVisible->tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.timestamp') }}
                        </th>
                        <td>
                            {{ $formValueVisible->timestamp }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-value-visibles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection