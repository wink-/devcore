@extends('layouts.admin')
@section('content')
@can('form_value_unit_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.form-value-units.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.formValueUnit.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.formValueUnit.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-FormValueUnit">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.form_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_6') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_7') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_9') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_10') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_11') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_13') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_15') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_16') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_17') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_18') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_19') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.unit_20') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.tank') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueUnit.fields.timestamp') }}
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
@can('form_value_unit_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.form-value-units.massDestroy') }}",
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
    ajax: "{{ route('admin.form-value-units.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'form_name', name: 'form_name' },
{ data: 'unit_1', name: 'unit_1' },
{ data: 'unit_2', name: 'unit_2' },
{ data: 'unit_3', name: 'unit_3' },
{ data: 'unit_4', name: 'unit_4' },
{ data: 'unit_5', name: 'unit_5' },
{ data: 'unit_6', name: 'unit_6' },
{ data: 'unit_7', name: 'unit_7' },
{ data: 'unit_8', name: 'unit_8' },
{ data: 'unit_9', name: 'unit_9' },
{ data: 'unit_10', name: 'unit_10' },
{ data: 'unit_11', name: 'unit_11' },
{ data: 'unit_12', name: 'unit_12' },
{ data: 'unit_13', name: 'unit_13' },
{ data: 'unit_14', name: 'unit_14' },
{ data: 'unit_15', name: 'unit_15' },
{ data: 'unit_16', name: 'unit_16' },
{ data: 'unit_17', name: 'unit_17' },
{ data: 'unit_18', name: 'unit_18' },
{ data: 'unit_19', name: 'unit_19' },
{ data: 'unit_20', name: 'unit_20' },
{ data: 'tank', name: 'tank' },
{ data: 'timestamp', name: 'timestamp' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-FormValueUnit').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection