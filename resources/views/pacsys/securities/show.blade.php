@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.security.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.securities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.security.fields.id') }}
                        </th>
                        <td>
                            {{ $security->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.security.fields.emp_code') }}
                        </th>
                        <td>
                            {{ $security->emp_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.security.fields.scope') }}
                        </th>
                        <td>
                            {{ $security->scope }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.security.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $security->time_stamp }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.securities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection