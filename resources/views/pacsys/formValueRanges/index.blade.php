@extends('layouts.admin')
@section('content')
@can('form_value_range_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('pacsys.form-value-ranges.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.formValueRange.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.formValueRange.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-FormValueRange">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.form_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_6') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_6') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_7') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_7') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_8') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_9') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_9') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_10') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_10') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_11') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_11') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_12') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_13') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_13') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_14') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_15') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_15') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_16') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_16') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_17') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_17') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_18') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_18') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_19') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_19') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.min_20') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.max_20') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.tank') }}
                    </th>
                    <th>
                        {{ trans('cruds.formValueRange.fields.time_stamp') }}
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
@can('form_value_range_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('pacsys.form-value-ranges.massDestroy') }}",
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
    ajax: "{{ route('pacsys.form-value-ranges.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'form_name', name: 'form_name' },
{ data: 'min_1', name: 'min_1' },
{ data: 'max_1', name: 'max_1' },
{ data: 'min_2', name: 'min_2' },
{ data: 'max_2', name: 'max_2' },
{ data: 'min_3', name: 'min_3' },
{ data: 'max_3', name: 'max_3' },
{ data: 'min_4', name: 'min_4' },
{ data: 'max_4', name: 'max_4' },
{ data: 'min_5', name: 'min_5' },
{ data: 'max_5', name: 'max_5' },
{ data: 'min_6', name: 'min_6' },
{ data: 'max_6', name: 'max_6' },
{ data: 'min_7', name: 'min_7' },
{ data: 'max_7', name: 'max_7' },
{ data: 'min_8', name: 'min_8' },
{ data: 'max_8', name: 'max_8' },
{ data: 'min_9', name: 'min_9' },
{ data: 'max_9', name: 'max_9' },
{ data: 'min_10', name: 'min_10' },
{ data: 'max_10', name: 'max_10' },
{ data: 'min_11', name: 'min_11' },
{ data: 'max_11', name: 'max_11' },
{ data: 'min_12', name: 'min_12' },
{ data: 'max_12', name: 'max_12' },
{ data: 'min_13', name: 'min_13' },
{ data: 'max_13', name: 'max_13' },
{ data: 'min_14', name: 'min_14' },
{ data: 'max_14', name: 'max_14' },
{ data: 'min_15', name: 'min_15' },
{ data: 'max_15', name: 'max_15' },
{ data: 'min_16', name: 'min_16' },
{ data: 'max_16', name: 'max_16' },
{ data: 'min_17', name: 'min_17' },
{ data: 'max_17', name: 'max_17' },
{ data: 'min_18', name: 'min_18' },
{ data: 'max_18', name: 'max_18' },
{ data: 'min_19', name: 'min_19' },
{ data: 'max_19', name: 'max_19' },
{ data: 'min_20', name: 'min_20' },
{ data: 'max_20', name: 'max_20' },
{ data: 'tank', name: 'tank' },
{ data: 'time_stamp', name: 'time_stamp' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-FormValueRange').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection