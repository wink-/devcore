@extends('layouts.admin')
@section('content')
@can('form_value_name_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.form-value-names.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.formValueName.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.formValueName.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-FormValueName">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.form_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_6') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_7') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_9') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_10') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_11') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_13') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_15') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_16') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_17') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_18') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_19') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.name_20') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.tank') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.time_stamp') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueName.fields.blank') }}
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
@can('form_value_name_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.form-value-names.massDestroy') }}",
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
    ajax: "{{ route('admin.form-value-names.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'form_name', name: 'form_name' },
{ data: 'name_1', name: 'name_1' },
{ data: 'name_2', name: 'name_2' },
{ data: 'name_3', name: 'name_3' },
{ data: 'name_4', name: 'name_4' },
{ data: 'name_5', name: 'name_5' },
{ data: 'name_6', name: 'name_6' },
{ data: 'name_7', name: 'name_7' },
{ data: 'name_8', name: 'name_8' },
{ data: 'name_9', name: 'name_9' },
{ data: 'name_10', name: 'name_10' },
{ data: 'name_11', name: 'name_11' },
{ data: 'name_12', name: 'name_12' },
{ data: 'name_13', name: 'name_13' },
{ data: 'name_14', name: 'name_14' },
{ data: 'name_15', name: 'name_15' },
{ data: 'name_16', name: 'name_16' },
{ data: 'name_17', name: 'name_17' },
{ data: 'name_18', name: 'name_18' },
{ data: 'name_19', name: 'name_19' },
{ data: 'name_20', name: 'name_20' },
{ data: 'tank', name: 'tank' },
{ data: 'time_stamp', name: 'time_stamp' },
{ data: 'blank', name: 'blank' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-FormValueName').DataTable(dtOverrideGlobals);
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