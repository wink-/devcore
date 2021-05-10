@extends('layouts.admin')
@section('content')
@can('workorder_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.workorders.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.workorder.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.workorder.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Workorder">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.number') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.customer_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.part') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.part_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.process_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.price') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.price_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.date_received') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.date_required') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.customer_purchase_order') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.customer_packing_list') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.quantity') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.unit_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.quantity_shipped') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.our_last_packing_list') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.destination_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.carrier_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.freight_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.date_shipped') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.invoice_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.invoice_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.invoice_amount') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.priority') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.rework') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.hot') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.started') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.completed') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.shipped') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.cod') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorder.fields.invoiced') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($parts as $key => $item)
                                <option value="{{ $item->number }}">{{ $item->number }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('workorder_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.workorders.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.workorders.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'number', name: 'number' },
{ data: 'customer_code', name: 'customer_code' },
{ data: 'part_number', name: 'part.number' },
{ data: 'part_number', name: 'part_number' },
{ data: 'process_code', name: 'process_code' },
{ data: 'price', name: 'price' },
{ data: 'price_code', name: 'price_code' },
{ data: 'date_received', name: 'date_received' },
{ data: 'date_required', name: 'date_required' },
{ data: 'customer_purchase_order', name: 'customer_purchase_order' },
{ data: 'customer_packing_list', name: 'customer_packing_list' },
{ data: 'quantity', name: 'quantity' },
{ data: 'unit_code', name: 'unit_code' },
{ data: 'quantity_shipped', name: 'quantity_shipped' },
{ data: 'our_last_packing_list', name: 'our_last_packing_list' },
{ data: 'destination_code', name: 'destination_code' },
{ data: 'carrier_code', name: 'carrier_code' },
{ data: 'freight_code', name: 'freight_code' },
{ data: 'date_shipped', name: 'date_shipped' },
{ data: 'invoice_number', name: 'invoice_number' },
{ data: 'invoice_date', name: 'invoice_date' },
{ data: 'invoice_amount', name: 'invoice_amount' },
{ data: 'priority', name: 'priority' },
{ data: 'rework', name: 'rework' },
{ data: 'hot', name: 'hot' },
{ data: 'started', name: 'started' },
{ data: 'completed', name: 'completed' },
{ data: 'shipped', name: 'shipped' },
{ data: 'cod', name: 'cod' },
{ data: 'invoiced', name: 'invoiced' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Workorder').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
});

</script>
@endsection