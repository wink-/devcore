@extends('layouts.admin')
@section('content')
@can('form_value_action_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.form-value-actions.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.formValueAction.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.formValueAction.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-FormValueAction">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.form_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_6') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_7') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_9') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_10') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_11') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_13') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_15') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_16') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_17') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_18') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_19') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.action_20') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.tank') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueAction.fields.time_stamp') }}
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
@can('form_value_action_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.form-value-actions.massDestroy') }}",
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
    ajax: "{{ route('admin.form-value-actions.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'form_name', name: 'form_name' },
{ data: 'action_1', name: 'action_1' },
{ data: 'action_2', name: 'action_2' },
{ data: 'action_3', name: 'action_3' },
{ data: 'action_4', name: 'action_4' },
{ data: 'action_5', name: 'action_5' },
{ data: 'action_6', name: 'action_6' },
{ data: 'action_7', name: 'action_7' },
{ data: 'action_8', name: 'action_8' },
{ data: 'action_9', name: 'action_9' },
{ data: 'action_10', name: 'action_10' },
{ data: 'action_11', name: 'action_11' },
{ data: 'action_12', name: 'action_12' },
{ data: 'action_13', name: 'action_13' },
{ data: 'action_14', name: 'action_14' },
{ data: 'action_15', name: 'action_15' },
{ data: 'action_16', name: 'action_16' },
{ data: 'action_17', name: 'action_17' },
{ data: 'action_18', name: 'action_18' },
{ data: 'action_19', name: 'action_19' },
{ data: 'action_20', name: 'action_20' },
{ data: 'tank', name: 'tank' },
{ data: 'time_stamp', name: 'time_stamp' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-FormValueAction').DataTable(dtOverrideGlobals);
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