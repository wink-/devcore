@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.loggerType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('processdata.logger-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.loggerType.fields.id') }}
                        </th>
                        <td>
                            {{ $loggerType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.loggerType.fields.name') }}
                        </th>
                        <td>
                            {{ $loggerType->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.loggerType.fields.description') }}
                        </th>
                        <td>
                            {{ $loggerType->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('processdata.logger-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection