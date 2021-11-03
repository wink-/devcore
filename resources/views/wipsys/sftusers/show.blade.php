@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sftuser.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.sftusers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sftuser.fields.id') }}
                        </th>
                        <td>
                            {{ $sftuser->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sftuser.fields.userid') }}
                        </th>
                        <td>
                            {{ $sftuser->userid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sftuser.fields.code') }}
                        </th>
                        <td>
                            {{ $sftuser->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sftuser.fields.user') }}
                        </th>
                        <td>
                            {{ $sftuser->user }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sftuser.fields.email') }}
                        </th>
                        <td>
                            {{ $sftuser->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sftuser.fields.password') }}
                        </th>
                        <td>
                            {{ $sftuser->password }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sftuser.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $sftuser->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sftuser.fields.revision') }}
                        </th>
                        <td>
                            {{ $sftuser->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.sftusers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection