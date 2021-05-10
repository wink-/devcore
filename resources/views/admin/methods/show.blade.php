@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.method.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.methods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.method.fields.id') }}
                        </th>
                        <td>
                            {{ $method->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.method.fields.code') }}
                        </th>
                        <td>
                            {{ $method->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.method.fields.name') }}
                        </th>
                        <td>
                            {{ $method->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.method.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $method->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.method.fields.revision') }}
                        </th>
                        <td>
                            {{ $method->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.methods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection