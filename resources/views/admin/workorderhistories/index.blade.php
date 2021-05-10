@extends('layouts.admin')
@section('content')
@can('workorderhistory_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.workorderhistories.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.workorderhistory.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.workorderhistory.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Workorderhistory">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.number') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.customer_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.customer_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.part') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.part_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.process_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.price') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.price_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.date_received') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.date_required') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.customer_purchase_order') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.customer_packing_list') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.quantity') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.unit_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.quantity_shipped') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.our_last_packing_list') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.destination_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.carrier_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.freight_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.date_shipped') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.invoice_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.invoice_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.invoice_amount') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.priority') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.rework') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.hot') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.started') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.completed') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.shipped') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.cod') }}
                    </th>
                    <th>
                        {{ trans('cruds.workorderhistory.fields.invoiced') }}
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
  
  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.workorderhistories.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'number', name: 'number' },
{ data: 'customer_code', name: 'customer_code' },
{ data: 'customer_name', name: 'customer_name' },
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
  let table = $('.datatable-Workorderhistory').DataTable(dtOverrideGlobals);
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