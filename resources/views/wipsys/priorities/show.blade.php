@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.priority.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.priorities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.priority.fields.id') }}
                        </th>
                        <td>
                            {{ $priority->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.priority.fields.code') }}
                        </th>
                        <td>
                            {{ $priority->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.priority.fields.description') }}
                        </th>
                        <td>
                            {{ $priority->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.priority.fields.image_key') }}
                        </th>
                        <td>
                            {{ $priority->image_key }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.priority.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $priority->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.priorities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection