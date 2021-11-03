@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.workgroup.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.workgroups.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.workgroup.fields.id') }}
                        </th>
                        <td>
                            {{ $workgroup->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workgroup.fields.name') }}
                        </th>
                        <td>
                            {{ $workgroup->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workgroup.fields.process_code') }}
                        </th>
                        <td>
                            {{ $workgroup->process_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workgroup.fields.method_code') }}
                        </th>
                        <td>
                            {{ $workgroup->method_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workgroup.fields.method_default') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workgroup->method_default ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workgroup.fields.step_code') }}
                        </th>
                        <td>
                            {{ $workgroup->step_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workgroup.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $workgroup->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workgroup.fields.revision') }}
                        </th>
                        <td>
                            {{ $workgroup->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.workgroups.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection