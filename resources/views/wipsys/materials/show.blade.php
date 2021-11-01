@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.material.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.materials.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.material.fields.id') }}
                        </th>
                        <td>
                            {{ $material->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.material.fields.name') }}
                        </th>
                        <td>
                            {{ $material->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.material.fields.description') }}
                        </th>
                        <td>
                            {{ $material->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.material.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $material->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.material.fields.revision') }}
                        </th>
                        <td>
                            {{ $material->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.materials.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection