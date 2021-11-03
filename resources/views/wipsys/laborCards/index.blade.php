@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.laborCard.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-LaborCard">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.work_order_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.employee_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.step_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.job_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.time_of_day') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.actual_hours') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.man_hours') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.actual_pieces') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.equipment_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.equipment_quantity') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.loads') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.cycle_time') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.time_finished') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.session') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.archive') }}
                    </th>
                    <th>
                        {{ trans('cruds.laborCard.fields.revision') }}
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
    ajax: "{{ route('wipsys.labor-cards.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'work_order_number', name: 'work_order_number' },
{ data: 'employee_code', name: 'employee_code' },
{ data: 'step_code', name: 'step_code' },
{ data: 'job_date', name: 'job_date' },
{ data: 'time_of_day', name: 'time_of_day' },
{ data: 'actual_hours', name: 'actual_hours' },
{ data: 'man_hours', name: 'man_hours' },
{ data: 'actual_pieces', name: 'actual_pieces' },
{ data: 'equipment_code', name: 'equipment_code' },
{ data: 'equipment_quantity', name: 'equipment_quantity' },
{ data: 'loads', name: 'loads' },
{ data: 'cycle_time', name: 'cycle_time' },
{ data: 'time_finished', name: 'time_finished' },
{ data: 'session', name: 'session' },
{ data: 'archive', name: 'archive' },
{ data: 'revision', name: 'revision' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-LaborCard').DataTable(dtOverrideGlobals);
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