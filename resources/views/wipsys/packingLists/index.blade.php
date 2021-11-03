@extends('layouts.admin')
@section('content')
@can('packing_list_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('wipsys.packing-lists.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.packingList.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.packingList.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-PackingList">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.number') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.date') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.employee_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.user_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.customer_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.destination_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.carrier_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.freight_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.customer_purchase_order') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.cod') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.date_received') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.printed') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.session') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.archive') }}
                    </th>
                    <th>
                        {{ trans('cruds.packingList.fields.revision') }}
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
    ajax: "{{ route('wipsys.packing-lists.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'number', name: 'number' },
{ data: 'date', name: 'date' },
{ data: 'employee_code', name: 'employee_code' },
{ data: 'user_code', name: 'user_code' },
{ data: 'customer_code', name: 'customer_code' },
{ data: 'destination_code', name: 'destination_code' },
{ data: 'carrier_code', name: 'carrier_code' },
{ data: 'freight_code', name: 'freight_code' },
{ data: 'customer_purchase_order', name: 'customer_purchase_order' },
{ data: 'cod', name: 'cod' },
{ data: 'date_received', name: 'date_received' },
{ data: 'printed', name: 'printed' },
{ data: 'session', name: 'session' },
{ data: 'archive', name: 'archive' },
{ data: 'revision', name: 'revision' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-PackingList').DataTable(dtOverrideGlobals);
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