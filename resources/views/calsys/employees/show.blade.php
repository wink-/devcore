@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.calemployee.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.calemployees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.calemployee.fields.id') }}
                        </th>
                        <td>
                            {{ $calemployee->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calemployee.fields.iden') }}
                        </th>
                        <td>
                            {{ $calemployee->iden }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calemployee.fields.user_init') }}
                        </th>
                        <td>
                            {{ $calemployee->user_init }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calemployee.fields.name') }}
                        </th>
                        <td>
                            {{ $calemployee->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.calemployees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection