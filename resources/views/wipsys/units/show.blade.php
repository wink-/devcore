@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.unit.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.units.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.unit.fields.id') }}
                        </th>
                        <td>
                            {{ $unit->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.unit.fields.code') }}
                        </th>
                        <td>
                            {{ $unit->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.unit.fields.description') }}
                        </th>
                        <td>
                            {{ $unit->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.unit.fields.name_singular') }}
                        </th>
                        <td>
                            {{ $unit->name_singular }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.unit.fields.name_plural') }}
                        </th>
                        <td>
                            {{ $unit->name_plural }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.unit.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $unit->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.unit.fields.revision') }}
                        </th>
                        <td>
                            {{ $unit->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.units.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection