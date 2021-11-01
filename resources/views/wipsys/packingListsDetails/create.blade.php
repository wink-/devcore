@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.packingListsDetail.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.packing-lists-details.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="packing_list_number">{{ trans('cruds.packingListsDetail.fields.packing_list_number') }}</label>
                <input class="form-control {{ $errors->has('packing_list_number') ? 'is-invalid' : '' }}" type="number" name="packing_list_number" id="packing_list_number" value="{{ old('packing_list_number', '') }}" step="1">
                @if($errors->has('packing_list_number'))
                    <span class="text-danger">{{ $errors->first('packing_list_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.packing_list_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tag_number">{{ trans('cruds.packingListsDetail.fields.tag_number') }}</label>
                <input class="form-control {{ $errors->has('tag_number') ? 'is-invalid' : '' }}" type="number" name="tag_number" id="tag_number" value="{{ old('tag_number', '') }}" step="1">
                @if($errors->has('tag_number'))
                    <span class="text-danger">{{ $errors->first('tag_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.tag_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="work_order_number">{{ trans('cruds.packingListsDetail.fields.work_order_number') }}</label>
                <input class="form-control {{ $errors->has('work_order_number') ? 'is-invalid' : '' }}" type="number" name="work_order_number" id="work_order_number" value="{{ old('work_order_number', '') }}" step="1">
                @if($errors->has('work_order_number'))
                    <span class="text-danger">{{ $errors->first('work_order_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.work_order_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="part">{{ trans('cruds.packingListsDetail.fields.part') }}</label>
                <input class="form-control {{ $errors->has('part') ? 'is-invalid' : '' }}" type="number" name="part" id="part" value="{{ old('part', '') }}" step="1">
                @if($errors->has('part'))
                    <span class="text-danger">{{ $errors->first('part') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.part_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="part_number">{{ trans('cruds.packingListsDetail.fields.part_number') }}</label>
                <input class="form-control {{ $errors->has('part_number') ? 'is-invalid' : '' }}" type="text" name="part_number" id="part_number" value="{{ old('part_number', '') }}">
                @if($errors->has('part_number'))
                    <span class="text-danger">{{ $errors->first('part_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.part_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_code">{{ trans('cruds.packingListsDetail.fields.customer_code') }}</label>
                <input class="form-control {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" type="text" name="customer_code" id="customer_code" value="{{ old('customer_code', '') }}">
                @if($errors->has('customer_code'))
                    <span class="text-danger">{{ $errors->first('customer_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="destination_code">{{ trans('cruds.packingListsDetail.fields.destination_code') }}</label>
                <input class="form-control {{ $errors->has('destination_code') ? 'is-invalid' : '' }}" type="text" name="destination_code" id="destination_code" value="{{ old('destination_code', '') }}">
                @if($errors->has('destination_code'))
                    <span class="text-danger">{{ $errors->first('destination_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.destination_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="process_code">{{ trans('cruds.packingListsDetail.fields.process_code') }}</label>
                <input class="form-control {{ $errors->has('process_code') ? 'is-invalid' : '' }}" type="text" name="process_code" id="process_code" value="{{ old('process_code', '') }}">
                @if($errors->has('process_code'))
                    <span class="text-danger">{{ $errors->first('process_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.process_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="method_code">{{ trans('cruds.packingListsDetail.fields.method_code') }}</label>
                <input class="form-control {{ $errors->has('method_code') ? 'is-invalid' : '' }}" type="text" name="method_code" id="method_code" value="{{ old('method_code', '') }}">
                @if($errors->has('method_code'))
                    <span class="text-danger">{{ $errors->first('method_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.method_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_packing_list">{{ trans('cruds.packingListsDetail.fields.customer_packing_list') }}</label>
                <input class="form-control {{ $errors->has('customer_packing_list') ? 'is-invalid' : '' }}" type="text" name="customer_packing_list" id="customer_packing_list" value="{{ old('customer_packing_list', '') }}">
                @if($errors->has('customer_packing_list'))
                    <span class="text-danger">{{ $errors->first('customer_packing_list') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.customer_packing_list_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_purchase_order">{{ trans('cruds.packingListsDetail.fields.customer_purchase_order') }}</label>
                <input class="form-control {{ $errors->has('customer_purchase_order') ? 'is-invalid' : '' }}" type="text" name="customer_purchase_order" id="customer_purchase_order" value="{{ old('customer_purchase_order', '') }}">
                @if($errors->has('customer_purchase_order'))
                    <span class="text-danger">{{ $errors->first('customer_purchase_order') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.customer_purchase_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certification_number">{{ trans('cruds.packingListsDetail.fields.certification_number') }}</label>
                <input class="form-control {{ $errors->has('certification_number') ? 'is-invalid' : '' }}" type="number" name="certification_number" id="certification_number" value="{{ old('certification_number', '') }}" step="1">
                @if($errors->has('certification_number'))
                    <span class="text-danger">{{ $errors->first('certification_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.certification_number_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('certify') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="certify" value="0">
                    <input class="form-check-input" type="checkbox" name="certify" id="certify" value="1" {{ old('certify', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="certify">{{ trans('cruds.packingListsDetail.fields.certify') }}</label>
                </div>
                @if($errors->has('certify'))
                    <span class="text-danger">{{ $errors->first('certify') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.certify_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tag_quantity">{{ trans('cruds.packingListsDetail.fields.tag_quantity') }}</label>
                <input class="form-control {{ $errors->has('tag_quantity') ? 'is-invalid' : '' }}" type="number" name="tag_quantity" id="tag_quantity" value="{{ old('tag_quantity', '') }}" step="0.01">
                @if($errors->has('tag_quantity'))
                    <span class="text-danger">{{ $errors->first('tag_quantity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.tag_quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tag_quantity_shipped">{{ trans('cruds.packingListsDetail.fields.tag_quantity_shipped') }}</label>
                <input class="form-control {{ $errors->has('tag_quantity_shipped') ? 'is-invalid' : '' }}" type="number" name="tag_quantity_shipped" id="tag_quantity_shipped" value="{{ old('tag_quantity_shipped', '') }}" step="0.01">
                @if($errors->has('tag_quantity_shipped'))
                    <span class="text-danger">{{ $errors->first('tag_quantity_shipped') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.tag_quantity_shipped_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity">{{ trans('cruds.packingListsDetail.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="number" name="quantity" id="quantity" value="{{ old('quantity', '') }}" step="0.01">
                @if($errors->has('quantity'))
                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="shipped_amount">{{ trans('cruds.packingListsDetail.fields.shipped_amount') }}</label>
                <input class="form-control {{ $errors->has('shipped_amount') ? 'is-invalid' : '' }}" type="number" name="shipped_amount" id="shipped_amount" value="{{ old('shipped_amount', '') }}" step="0.01">
                @if($errors->has('shipped_amount'))
                    <span class="text-danger">{{ $errors->first('shipped_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.shipped_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="packing_list_date">{{ trans('cruds.packingListsDetail.fields.packing_list_date') }}</label>
                <input class="form-control date {{ $errors->has('packing_list_date') ? 'is-invalid' : '' }}" type="text" name="packing_list_date" id="packing_list_date" value="{{ old('packing_list_date') }}">
                @if($errors->has('packing_list_date'))
                    <span class="text-danger">{{ $errors->first('packing_list_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.packing_list_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_received">{{ trans('cruds.packingListsDetail.fields.date_received') }}</label>
                <input class="form-control date {{ $errors->has('date_received') ? 'is-invalid' : '' }}" type="text" name="date_received" id="date_received" value="{{ old('date_received') }}">
                @if($errors->has('date_received'))
                    <span class="text-danger">{{ $errors->first('date_received') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.date_received_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="session">{{ trans('cruds.packingListsDetail.fields.session') }}</label>
                <input class="form-control {{ $errors->has('session') ? 'is-invalid' : '' }}" type="text" name="session" id="session" value="{{ old('session', '') }}">
                @if($errors->has('session'))
                    <span class="text-danger">{{ $errors->first('session') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.session_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.packingListsDetail.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <span class="text-danger">{{ $errors->first('archive') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.packingListsDetail.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <span class="text-danger">{{ $errors->first('revision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packingListsDetail.fields.revision_helper') }}</span>
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