@extends('layouts.admin')
@section('content')
@can('wipsys_create')
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
                        ID
                    </th>
                    <th>
                        Number
                    </th>
                    <th>
                        Cust Code
                    </th>
                    <th>
                        Part Number
                    </th>
                    <th>
                        Part ID
                    </th>
                    <th>
                        Process Code
                    </th>
<!--                     <th>
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
                    </th> -->
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
    ajax: "{{ route('admin.workorders.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'number', name: 'number' },
{ data: 'customer_code', name: 'customer_code' },
{ data: 'part_number', name: 'part_number' },
{ data: 'part_id', name: 'part_id' },
{ data: 'process_code', name: 'process_code' },
// { data: 'customer_name', name: 'customer_name' },
// { data: 'price', name: 'price' },
// { data: 'minimum_lot_charge', name: 'minimum_lot_charge' },
// { data: 'quote_id', name: 'quote_id' },
// { data: 'specification', name: 'specification' },
// { data: 'procedure_code', name: 'procedure_code' },
// { data: 'operator_note', name: 'operator_note' },
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