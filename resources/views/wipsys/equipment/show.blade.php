@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.equipment.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.equipment.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.equipment.fields.id') }}
                        </th>
                        <td>
                            {{ $equipment->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.equipment.fields.code') }}
                        </th>
                        <td>
                            {{ $equipment->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.equipment.fields.description') }}
                        </th>
                        <td>
                            {{ $equipment->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.equipment.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $equipment->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.equipment.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection