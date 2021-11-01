@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.session.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sessions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.session.fields.id') }}
                        </th>
                        <td>
                            {{ $session->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.session.fields.session') }}
                        </th>
                        <td>
                            {{ $session->session }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.session.fields.jwt') }}
                        </th>
                        <td>
                            {{ $session->jwt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.session.fields.active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $session->active ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.session.fields.key_strokes') }}
                        </th>
                        <td>
                            {{ $session->key_strokes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.session.fields.user') }}
                        </th>
                        <td>
                            {{ $session->user }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.session.fields.email') }}
                        </th>
                        <td>
                            {{ $session->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.session.fields.userid') }}
                        </th>
                        <td>
                            {{ $session->userid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.session.fields.user_code') }}
                        </th>
                        <td>
                            {{ $session->user_code }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sessions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection