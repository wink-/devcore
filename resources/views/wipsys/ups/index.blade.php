@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.up.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Up">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.up.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.tracking_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.receiver_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.shipment_process_timestamp') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.service_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.weight') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.ref_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.ref_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.ref_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.ref_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.ref_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.archive') }}
                    </th>
                    <th>
                        {{ trans('cruds.up.fields.revision') }}
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
    ajax: "{{ route('wipsys.ups.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'tracking_number', name: 'tracking_number' },
{ data: 'receiver_name', name: 'receiver_name' },
{ data: 'shipment_process_timestamp', name: 'shipment_process_timestamp' },
{ data: 'service_type', name: 'service_type' },
{ data: 'weight', name: 'weight' },
{ data: 'ref_1', name: 'ref_1' },
{ data: 'ref_2', name: 'ref_2' },
{ data: 'ref_3', name: 'ref_3' },
{ data: 'ref_4', name: 'ref_4' },
{ data: 'ref_5', name: 'ref_5' },
{ data: 'archive', name: 'archive' },
{ data: 'revision', name: 'revision' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Up').DataTable(dtOverrideGlobals);
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