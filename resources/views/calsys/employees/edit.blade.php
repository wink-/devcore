@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.employee.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("calsys.employees.update", [$employee->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="iden">{{ trans('cruds.employee.fields.iden') }}</label>
                <input class="form-control {{ $errors->has('iden') ? 'is-invalid' : '' }}" type="text" name="iden" id="iden" value="{{ old('iden', $employee->iden) }}">
                @if($errors->has('iden'))
                    <span class="text-danger">{{ $errors->first('iden') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.iden_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_init">{{ trans('cruds.employee.fields.user_init') }}</label>
                <input class="form-control {{ $errors->has('user_init') ? 'is-invalid' : '' }}" type="text" name="user_init" id="user_init" value="{{ old('user_init', $employee->user_init) }}">
                @if($errors->has('user_init'))
                    <span class="text-danger">{{ $errors->first('user_init') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.user_init_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.employee.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $employee->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>



@endsection