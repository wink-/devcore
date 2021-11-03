@extends('layouts.admin')
@section('content')
@can('form_value_period_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('pacsys.form-value-periods.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.formValuePeriod.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.formValuePeriod.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-FormValuePeriod">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.form_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_6') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_7') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_9') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_10') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_11') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_13') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_15') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_16') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_17') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_18') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_19') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.period_20') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.tank') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValuePeriod.fields.time_stamp') }}
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
@can('form_value_period_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('pacsys.form-value-periods.massDestroy') }}",
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
    ajax: "{{ route('pacsys.form-value-periods.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'form_name', name: 'form_name' },
{ data: 'period_1', name: 'period_1' },
{ data: 'period_2', name: 'period_2' },
{ data: 'period_3', name: 'period_3' },
{ data: 'period_4', name: 'period_4' },
{ data: 'period_5', name: 'period_5' },
{ data: 'period_6', name: 'period_6' },
{ data: 'period_7', name: 'period_7' },
{ data: 'period_8', name: 'period_8' },
{ data: 'period_9', name: 'period_9' },
{ data: 'period_10', name: 'period_10' },
{ data: 'period_11', name: 'period_11' },
{ data: 'period_12', name: 'period_12' },
{ data: 'period_13', name: 'period_13' },
{ data: 'period_14', name: 'period_14' },
{ data: 'period_15', name: 'period_15' },
{ data: 'period_16', name: 'period_16' },
{ data: 'period_17', name: 'period_17' },
{ data: 'period_18', name: 'period_18' },
{ data: 'period_19', name: 'period_19' },
{ data: 'period_20', name: 'period_20' },
{ data: 'tank', name: 'tank' },
{ data: 'time_stamp', name: 'time_stamp' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-FormValuePeriod').DataTable(dtOverrideGlobals);
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