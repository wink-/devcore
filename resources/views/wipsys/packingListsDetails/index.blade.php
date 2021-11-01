@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.packingListsDetail.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-PackingListsDetail">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.packing_list_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.tag_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.work_order_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.part') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.part_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.customer_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.destination_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.process_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.method_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.customer_packing_list') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.customer_purchase_order') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.certification_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.certify') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.tag_quantity') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.tag_quantity_shipped') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.quantity') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.shipped_amount') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.packing_list_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.date_received') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.session') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.archive') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingListsDetail.fields.revision') }}
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
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
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
    ajax: "{{ route('admin.packing-lists-details.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'packing_list_number', name: 'packing_list_number' },
{ data: 'tag_number', name: 'tag_number' },
{ data: 'work_order_number', name: 'work_order_number' },
{ data: 'part', name: 'part' },
{ data: 'part_number', name: 'part_number' },
{ data: 'customer_code', name: 'customer_code' },
{ data: 'destination_code', name: 'destination_code' },
{ data: 'process_code', name: 'process_code' },
{ data: 'method_code', name: 'method_code' },
{ data: 'customer_packing_list', name: 'customer_packing_list' },
{ data: 'customer_purchase_order', name: 'customer_purchase_order' },
{ data: 'certification_number', name: 'certification_number' },
{ data: 'certify', name: 'certify' },
{ data: 'tag_quantity', name: 'tag_quantity' },
{ data: 'tag_quantity_shipped', name: 'tag_quantity_shipped' },
{ data: 'quantity', name: 'quantity' },
{ data: 'shipped_amount', name: 'shipped_amount' },
{ data: 'packing_list_date', name: 'packing_list_date' },
{ data: 'date_received', name: 'date_received' },
{ data: 'session', name: 'session' },
{ data: 'archive', name: 'archive' },
{ data: 'revision', name: 'revision' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-PackingListsDetail').DataTable(dtOverrideGlobals);
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