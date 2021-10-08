@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.action.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.actions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.ID') }}
                        </th>
                        <td>
                            {{ $action->getKey() }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.IDx') }}
                        </th>
                        <td>
                            {{ $action->IDx }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.RecordName') }}
                        </th>
                        <td>
                            {{ $action->RecordName }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.FormName') }}
                        </th>
                        <td>
                            {{ $action->FormName }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.ValueName') }}
                        </th>
                        <td>
                            {{ $action->ValueName }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.Value') }}
                        </th>
                        <td>
                            {{ $action->Value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.RecDate') }}
                        </th>
                        <td>
                            {{ $action->RecDate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.ActDate') }}
                        </th>
                        <td>
                            {{ $action->ActDate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.Complete') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $action->Complete ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.RecEmpCode') }}
                        </th>
                        <td>
                            {{ $action->RecEmpCode }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.Unit') }}
                        </th>
                        <td>
                            {{ $action->Unit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.ActValue') }}
                        </th>
                        <td>
                            {{ $action->ActValue }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.ScopeName') }}
                        </th>
                        <td>
                            {{ $action->ScopeName }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.Comment') }}
                        </th>
                        <td>
                            {{ $action->Comment }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.Tank') }}
                        </th>
                        <td>
                            {{ $action->Tank }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.TimeStamp') }}
                        </th>
                        <td>
                            {{ $action->TimeStamp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.EmpName') }}
                        </th>
                        <td>
                            {{ $action->EmpName }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.IDy') }}
                        </th>
                        <td>
                            {{ $action->IDy }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.action.fields.ValueNum') }}
                        </th>
                        <td>
                            {{ $action->ValueNum }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.actions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
