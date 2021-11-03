@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit {{ trans('cruds.tag.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("wipsys.tags.update", [$tag->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="number">{{ trans('cruds.tag.fields.number') }}</label>
                <input class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" type="number" name="number" id="number" value="{{ old('number', $tag->number) }}" step="1">
                @if($errors->has('number'))
                    <span class="text-danger">{{ $errors->first('number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="work_order_number">{{ trans('cruds.tag.fields.work_order_number') }}</label>
                <input class="form-control {{ $errors->has('work_order_number') ? 'is-invalid' : '' }}" type="number" name="work_order_number" id="work_order_number" value="{{ old('work_order_number', $tag->work_order_number) }}" step="1">
                @if($errors->has('work_order_number'))
                    <span class="text-danger">{{ $errors->first('work_order_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.work_order_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity">{{ trans('cruds.tag.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="number" name="quantity" id="quantity" value="{{ old('quantity', $tag->quantity) }}" step="0.01">
                @if($errors->has('quantity'))
                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity_shipped">{{ trans('cruds.tag.fields.quantity_shipped') }}</label>
                <input class="form-control {{ $errors->has('quantity_shipped') ? 'is-invalid' : '' }}" type="number" name="quantity_shipped" id="quantity_shipped" value="{{ old('quantity_shipped', $tag->quantity_shipped) }}" step="0.01">
                @if($errors->has('quantity_shipped'))
                    <span class="text-danger">{{ $errors->first('quantity_shipped') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.quantity_shipped_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('shipped') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="shipped" value="0">
                    <input class="form-check-input" type="checkbox" name="shipped" id="shipped" value="1" {{ $tag->shipped || old('shipped', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="shipped">{{ trans('cruds.tag.fields.shipped') }}</label>
                </div>
                @if($errors->has('shipped'))
                    <span class="text-danger">{{ $errors->first('shipped') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.shipped_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_received">{{ trans('cruds.tag.fields.date_received') }}</label>
                <input class="form-control date {{ $errors->has('date_received') ? 'is-invalid' : '' }}" type="text" name="date_received" id="date_received" value="{{ old('date_received', $tag->date_received) }}">
                @if($errors->has('date_received'))
                    <span class="text-danger">{{ $errors->first('date_received') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.date_received_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.tag.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $tag->note) }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ordinal">{{ trans('cruds.tag.fields.ordinal') }}</label>
                <input class="form-control {{ $errors->has('ordinal') ? 'is-invalid' : '' }}" type="number" name="ordinal" id="ordinal" value="{{ old('ordinal', $tag->ordinal) }}" step="1">
                @if($errors->has('ordinal'))
                    <span class="text-danger">{{ $errors->first('ordinal') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.ordinal_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="container">{{ trans('cruds.tag.fields.container') }}</label>
                <input class="form-control {{ $errors->has('container') ? 'is-invalid' : '' }}" type="text" name="container" id="container" value="{{ old('container', $tag->container) }}">
                @if($errors->has('container'))
                    <span class="text-danger">{{ $errors->first('container') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.container_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('printed') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="printed" value="0">
                    <input class="form-check-input" type="checkbox" name="printed" id="printed" value="1" {{ $tag->printed || old('printed', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="printed">{{ trans('cruds.tag.fields.printed') }}</label>
                </div>
                @if($errors->has('printed'))
                    <span class="text-danger">{{ $errors->first('printed') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.printed_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sessionid">{{ trans('cruds.tag.fields.sessionid') }}</label>
                <input class="form-control {{ $errors->has('sessionid') ? 'is-invalid' : '' }}" type="text" name="sessionid" id="sessionid" value="{{ old('sessionid', $tag->sessionid) }}">
                @if($errors->has('sessionid'))
                    <span class="text-danger">{{ $errors->first('sessionid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.sessionid_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $tag->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.tag.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.tag.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $tag->revision) }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tag.fields.revision_helper') }}</span>
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