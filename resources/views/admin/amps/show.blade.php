@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.amp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.amps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.amp.fields.id') }}
                        </th>
                        <td>
                            {{ $amp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.amp.fields.record') }}
                        </th>
                        <td>
                            {{ $amp->record->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.amp.fields.amp') }}
                        </th>
                        <td>
                            {{ $amp->amp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.amp.fields.amp_minute') }}
                        </th>
                        <td>
                            {{ $amp->amp_minute }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.amps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection