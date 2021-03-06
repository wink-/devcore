@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.period.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('pacsys.periods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.period.fields.id') }}
                        </th>
                        <td>
                            {{ $period->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.period.fields.period') }}
                        </th>
                        <td>
                            {{ $period->period }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.period.fields.description') }}
                        </th>
                        <td>
                            {{ $period->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('pacsys.periods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection