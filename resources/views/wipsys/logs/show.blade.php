@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.log.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.log.fields.id') }}
                        </th>
                        <td>
                            {{ $log->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.log.fields.session') }}
                        </th>
                        <td>
                            {{ $log->session }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.log.fields.key_strokes') }}
                        </th>
                        <td>
                            {{ $log->key_strokes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.log.fields.revision') }}
                        </th>
                        <td>
                            {{ $log->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection