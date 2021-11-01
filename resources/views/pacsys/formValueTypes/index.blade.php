@extends('layouts.admin')
@section('content')
@can('form_value_type_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.form-value-types.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.formValueType.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.formValueType.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-FormValueType">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.form_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_6') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_7') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_9') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_10') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_11') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_13') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_15') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_16') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_17') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_18') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_19') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.type_20') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.tank') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.timestamp') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.false') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueType.fields.true') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
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
@can('form_value_type_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.form-value-types.massDestroy') }}",
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
    ajax: "{{ route('admin.form-value-types.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'form_name', name: 'form_name' },
{ data: 'type_1', name: 'type_1' },
{ data: 'type_2', name: 'type_2' },
{ data: 'type_3', name: 'type_3' },
{ data: 'type_4', name: 'type_4' },
{ data: 'type_5', name: 'type_5' },
{ data: 'type_6', name: 'type_6' },
{ data: 'type_7', name: 'type_7' },
{ data: 'type_8', name: 'type_8' },
{ data: 'type_9', name: 'type_9' },
{ data: 'type_10', name: 'type_10' },
{ data: 'type_11', name: 'type_11' },
{ data: 'type_12', name: 'type_12' },
{ data: 'type_13', name: 'type_13' },
{ data: 'type_14', name: 'type_14' },
{ data: 'type_15', name: 'type_15' },
{ data: 'type_16', name: 'type_16' },
{ data: 'type_17', name: 'type_17' },
{ data: 'type_18', name: 'type_18' },
{ data: 'type_19', name: 'type_19' },
{ data: 'type_20', name: 'type_20' },
{ data: 'tank', name: 'tank' },
{ data: 'timestamp', name: 'timestamp' },
{ data: 'false', name: 'false' },
{ data: 'true', name: 'true' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-FormValueType').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection