@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.step.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.steps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.step.fields.id') }}
                        </th>
                        <td>
                            {{ $step->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.step.fields.code') }}
                        </th>
                        <td>
                            {{ $step->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.step.fields.description') }}
                        </th>
                        <td>
                            {{ $step->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.step.fields.equipment_hours') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $step->equipment_hours ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('wipsys.steps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection