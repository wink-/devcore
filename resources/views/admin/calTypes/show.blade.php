@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.calType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cal-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.calType.fields.id') }}
                        </th>
                        <td>
                            {{ $calType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calType.fields.name') }}
                        </th>
                        <td>
                            {{ $calType->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calType.fields.proc_link') }}
                        </th>
                        <td>
                            {{ $calType->proc_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cal-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection