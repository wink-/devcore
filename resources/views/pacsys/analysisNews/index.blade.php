@extends('layouts.admin')
@section('content')
@can('analysis_new_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('pacsys.analysis-news.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.analysisNew.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.analysisNew.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-AnalysisNew">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.record_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.form_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.date') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_6') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_7') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_9') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_10') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_11') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_13') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_15') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_16') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_17') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_18') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_19') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.value_20') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.tank') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.emp_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.time_stamp') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.delete_visible') }}
                    </th>
                    <th>
                        {{ trans('cruds.analysisNew.fields.label') }}
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
@can('analysis_new_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('pacsys.analysis-news.massDestroy') }}",
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
    ajax: "{{ route('pacsys.analysis-news.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'record_name', name: 'record_name' },
{ data: 'form_name', name: 'form_name' },
{ data: 'date', name: 'date' },
{ data: 'value_1', name: 'value_1' },
{ data: 'value_2', name: 'value_2' },
{ data: 'value_3', name: 'value_3' },
{ data: 'value_4', name: 'value_4' },
{ data: 'value_5', name: 'value_5' },
{ data: 'value_6', name: 'value_6' },
{ data: 'value_7', name: 'value_7' },
{ data: 'value_8', name: 'value_8' },
{ data: 'value_9', name: 'value_9' },
{ data: 'value_10', name: 'value_10' },
{ data: 'value_11', name: 'value_11' },
{ data: 'value_12', name: 'value_12' },
{ data: 'value_13', name: 'value_13' },
{ data: 'value_14', name: 'value_14' },
{ data: 'value_15', name: 'value_15' },
{ data: 'value_16', name: 'value_16' },
{ data: 'value_17', name: 'value_17' },
{ data: 'value_18', name: 'value_18' },
{ data: 'value_19', name: 'value_19' },
{ data: 'value_20', name: 'value_20' },
{ data: 'tank', name: 'tank' },
{ data: 'emp_code', name: 'emp_code' },
{ data: 'time_stamp', name: 'time_stamp' },
{ data: 'delete_visible', name: 'delete_visible' },
{ data: 'label', name: 'label' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-AnalysisNew').DataTable(dtOverrideGlobals);
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