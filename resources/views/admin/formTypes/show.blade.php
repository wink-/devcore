@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.formType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.formType.fields.id') }}
                        </th>
                        <td>
                            {{ $formType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formType.fields.form_type') }}
                        </th>
                        <td>
                            {{ $formType->form_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formType.fields.description') }}
                        </th>
                        <td>
                            {{ $formType->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.formType.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $formType->time_stamp }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.form-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection