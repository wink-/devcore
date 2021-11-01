@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.procedure.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.procedures.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.procedure.fields.id') }}
                        </th>
                        <td>
                            {{ $procedure->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.procedure.fields.code') }}
                        </th>
                        <td>
                            {{ $procedure->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.procedure.fields.description') }}
                        </th>
                        <td>
                            {{ $procedure->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.procedure.fields.document') }}
                        </th>
                        <td>
                            {{ $procedure->document }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.procedure.fields.minimum_price') }}
                        </th>
                        <td>
                            {{ $procedure->minimum_price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.procedure.fields.each_price') }}
                        </th>
                        <td>
                            {{ $procedure->each_price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.procedure.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $procedure->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.procedure.fields.revision') }}
                        </th>
                        <td>
                            {{ $procedure->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.procedures.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection