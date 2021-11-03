@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.recordType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('processdata.record-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.recordType.fields.id') }}
                        </th>
                        <td>
                            {{ $recordType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recordType.fields.name') }}
                        </th>
                        <td>
                            {{ $recordType->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recordType.fields.description') }}
                        </th>
                        <td>
                            {{ $recordType->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('processdata.record-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection