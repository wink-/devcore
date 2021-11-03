@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.logger.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('processdata.loggers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.logger.fields.id') }}
                        </th>
                        <td>
                            {{ $logger->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.logger.fields.active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $logger->active ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.logger.fields.name') }}
                        </th>
                        <td>
                            {{ $logger->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.logger.fields.description') }}
                        </th>
                        <td>
                            {{ $logger->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.logger.fields.logger_type') }}
                        </th>
                        <td>
                            {{ $logger->logger_type->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.logger.fields.ip_address') }}
                        </th>
                        <td>
                            {{ $logger->ip_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.logger.fields.port') }}
                        </th>
                        <td>
                            {{ $logger->port }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('processdata.loggers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection