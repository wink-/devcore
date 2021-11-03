@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pdUnit.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('processdata.pd-units.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pdUnit.fields.id') }}
                        </th>
                        <td>
                            {{ $pdUnit->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdUnit.fields.name') }}
                        </th>
                        <td>
                            {{ $pdUnit->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pdUnit.fields.description') }}
                        </th>
                        <td>
                            {{ $pdUnit->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('processdata.pd-units.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection