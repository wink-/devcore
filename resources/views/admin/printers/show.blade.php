@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.printer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.printers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.printer.fields.id') }}
                        </th>
                        <td>
                            {{ $printer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.printer.fields.printer') }}
                        </th>
                        <td>
                            {{ $printer->printer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.printer.fields.description') }}
                        </th>
                        <td>
                            {{ $printer->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.printer.fields.archive') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $printer->archive ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.printer.fields.revision') }}
                        </th>
                        <td>
                            {{ $printer->revision }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.printers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection