@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.form.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('pacsys.forms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.form.fields.id') }}
                        </th>
                        <td>
                            {{ $form->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.form.fields.name') }}
                        </th>
                        <td>
                            {{ $form->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.form.fields.description') }}
                        </th>
                        <td>
                            {{ $form->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.form.fields.form_type') }}
                        </th>
                        <td>
                            {{ $form->form_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.form.fields.time_stamp') }}
                        </th>
                        <td>
                            {{ $form->time_stamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.form.fields.archived') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $form->archived ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.form.fields.revision') }}
                        </th>
                        <td>
                            {{ $form->revision }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.form.fields.analysis_procedure') }}
                        </th>
                        <td>
                            {{ $form->analysis_procedure }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('pacsys.forms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection