@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.calcValue.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.calc-values.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.calcValue.fields.id') }}
                        </th>
                        <td>
                            {{ $calcValue->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calcValue.fields.value_name') }}
                        </th>
                        <td>
                            {{ $calcValue->value_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calcValue.fields.description') }}
                        </th>
                        <td>
                            {{ $calcValue->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calcValue.fields.formula') }}
                        </th>
                        <td>
                            {{ $calcValue->formula }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calcValue.fields.order_calc') }}
                        </th>
                        <td>
                            {{ $calcValue->order_calc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calcValue.fields.form_name') }}
                        </th>
                        <td>
                            {{ $calcValue->form_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calcValue.fields.decimal_places') }}
                        </th>
                        <td>
                            {{ $calcValue->decimal_places }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calcValue.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $calcValue->time_stamp }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.calc-values.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection