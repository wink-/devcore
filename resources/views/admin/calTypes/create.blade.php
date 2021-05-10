@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.calType.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.cal-types.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.calType.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.calType.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="proc_link">{{ trans('cruds.calType.fields.proc_link') }}</label>
                <input class="form-control {{ $errors->has('proc_link') ? 'is-invalid' : '' }}" type="text" name="proc_link" id="proc_link" value="{{ old('proc_link', '') }}">
                @if($errors->has('proc_link'))
                    <span class="text-danger">{{ $errors->first('proc_link') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.calType.fields.proc_link_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection