@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pEmployee.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.p-employees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pEmployee.fields.id') }}
                        </th>
                        <td>
                            {{ $pEmployee->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pEmployee.fields.name') }}
                        </th>
                        <td>
                            {{ $pEmployee->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pEmployee.fields.user_name') }}
                        </th>
                        <td>
                            {{ $pEmployee->user_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pEmployee.fields.code') }}
                        </th>
                        <td>
                            {{ $pEmployee->code }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.p-employees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection