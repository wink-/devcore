@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.qualitycheck.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.qualitychecks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.qualitycheck.fields.id') }}
                        </th>
                        <td>
                            {{ $qualitycheck->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualitycheck.fields.description') }}
                        </th>
                        <td>
                            {{ $qualitycheck->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualitycheck.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $qualitycheck->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.qualitychecks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection