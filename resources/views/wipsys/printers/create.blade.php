@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create {{ trans('cruds.printer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("wipsys.printers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="printer">{{ trans('cruds.printer.fields.printer') }}</label>
                <input class="form-control {{ $errors->has('printer') ? 'is-invalid' : '' }}" type="text" name="printer" id="printer" value="{{ old('printer', '') }}">
                @if($errors->has('printer'))
                    <span class="text-danger">{{ $errors->first('printer') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.printer.fields.printer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.printer.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.printer.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.printer.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.printer.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.printer.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.printer.fields.revision_helper') }}</span>
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