@extends('layouts.admin')
@section('content')
@can('actions_temp_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.actions-temps.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.actionsTemp.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.actionsTemp.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-ActionsTemp">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.i_dx') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.record_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.form_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.value_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.value') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.rec_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.act_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.complete') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.rec_emp_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.unit') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.act_value') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.scope_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.comment') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.tank') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.time_stamp') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.emp_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.i_dy') }}
                    </th>
                    <th>
                        {{ trans('cruds.actionsTemp.fields.value_num') }}
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
@can('actions_temp_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.actions-temps.massDestroy') }}",
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
    ajax: "{{ route('admin.actions-temps.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'i_dx', name: 'i_dx' },
{ data: 'record_name', name: 'record_name' },
{ data: 'form_name', name: 'form_name' },
{ data: 'value_name', name: 'value_name' },
{ data: 'value', name: 'value' },
{ data: 'rec_date', name: 'rec_date' },
{ data: 'act_date', name: 'act_date' },
{ data: 'complete', name: 'complete' },
{ data: 'rec_emp_code', name: 'rec_emp_code' },
{ data: 'unit', name: 'unit' },
{ data: 'act_value', name: 'act_value' },
{ data: 'scope_name', name: 'scope_name' },
{ data: 'comment', name: 'comment' },
{ data: 'tank', name: 'tank' },
{ data: 'time_stamp', name: 'time_stamp' },
{ data: 'emp_name', name: 'emp_name' },
{ data: 'i_dy', name: 'i_dy' },
{ data: 'value_num', name: 'value_num' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-ActionsTemp').DataTable(dtOverrideGlobals);
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