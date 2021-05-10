@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.freight.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.freights.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.freight.fields.id') }}
                        </th>
                        <td>
                            {{ $freight->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.freight.fields.code') }}
                        </th>
                        <td>
                            {{ $freight->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.freight.fields.name') }}
                        </th>
                        <td>
                            {{ $freight->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.freight.fields.description') }}
                        </th>
                        <td>
                            {{ $freight->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.freight.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $freight->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.freight.fields.revision') }}
                        </th>
                        <td>
                            {{ $freight->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.freights.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection