@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.laborCard.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.labor-cards.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.id') }}
                        </th>
                        <td>
                            {{ $laborCard->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.work_order_number') }}
                        </th>
                        <td>
                            {{ $laborCard->work_order_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.employee_code') }}
                        </th>
                        <td>
                            {{ $laborCard->employee_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.step_code') }}
                        </th>
                        <td>
                            {{ $laborCard->step_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.job_date') }}
                        </th>
                        <td>
                            {{ $laborCard->job_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.time_of_day') }}
                        </th>
                        <td>
                            {{ $laborCard->time_of_day }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.actual_hours') }}
                        </th>
                        <td>
                            {{ $laborCard->actual_hours }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.man_hours') }}
                        </th>
                        <td>
                            {{ $laborCard->man_hours }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.actual_pieces') }}
                        </th>
                        <td>
                            {{ $laborCard->actual_pieces }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.equipment_code') }}
                        </th>
                        <td>
                            {{ $laborCard->equipment_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.equipment_quantity') }}
                        </th>
                        <td>
                            {{ $laborCard->equipment_quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.loads') }}
                        </th>
                        <td>
                            {{ $laborCard->loads }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.cycle_time') }}
                        </th>
                        <td>
                            {{ $laborCard->cycle_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.time_finished') }}
                        </th>
                        <td>
                            {{ $laborCard->time_finished }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.session') }}
                        </th>
                        <td>
                            {{ $laborCard->session }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $laborCard->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.laborCard.fields.revision') }}
                        </th>
                        <td>
                            {{ $laborCard->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.labor-cards.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection