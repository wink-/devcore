@extends('layouts.admin')
@section('content')
@can('price_code_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('wipsys.price-codes.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.priceCode.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.priceCode.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PriceCode">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.priceCode.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.priceCode.fields.code') }}
                        </th>
                        <th>
                            {{ trans('cruds.priceCode.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.priceCode.fields.archive') }}
                        </th>
                        <th>
                            {{ trans('cruds.priceCode.fields.revision') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($priceCodes as $key => $priceCode)
                        <tr data-entry-id="{{ $priceCode->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $priceCode->id ?? '' }}
                            </td>
                            <td>
                                {{ $priceCode->code ?? '' }}
                            </td>
                            <td>
                                {{ $priceCode->description ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $priceCode->archive ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $priceCode->archive ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $priceCode->revision ?? '' }}
                            </td>
                            <td>
                                @can('price_code_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('wipsys.price-codes.show', $priceCode->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('price_code_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('wipsys.price-codes.edit', $priceCode->id) }}">
                                        Edit
                                    </a>
                                @endcan

                                @can('price_code_delete')
                                    <form action="{{ route('wipsys.price-codes.destroy', $priceCode->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('price_code_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('wipsys.price-codes.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-PriceCode:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection