@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit {{ trans('cruds.month.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("pacsys.months.update", [$month->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="month_number">{{ trans('cruds.month.fields.month_number') }}</label>
                <input class="form-control {{ $errors->has('month_number') ? 'is-invalid' : '' }}" type="text" name="month_number" id="month_number" value="{{ old('month_number', $month->month_number) }}">
                @if($errors->has('month_number'))
                    <span class="text-danger">{{ $errors->first('month_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.month.fields.month_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="month_name">{{ trans('cruds.month.fields.month_name') }}</label>
                <input class="form-control {{ $errors->has('month_name') ? 'is-invalid' : '' }}" type="text" name="month_name" id="month_name" value="{{ old('month_name', $month->month_name) }}">
                @if($errors->has('month_name'))
                    <span class="text-danger">{{ $errors->first('month_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.month.fields.month_name_helper') }}</span>
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