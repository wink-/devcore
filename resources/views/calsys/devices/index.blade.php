@extends('layouts.admin')
@section('content')
@can('cal_device_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.cal-devices.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.calDevice.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.calDevice.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-CalDevice">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.calDevice.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.calDevice.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.calDevice.fields.description') }}
                    </th>
                    <th>
                        {{ trans('cruds.calDevice.fields.serial_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.calDevice.fields.source') }}
                    </th>
                    <th>
                        {{ trans('cruds.calDevice.fields.type') }}
                    </th>
                    <th>
                        {{ trans('cruds.calDevice.fields.period') }}
                    </th>
                    <th>
                        {{ trans('cruds.calDevice.fields.location') }}
                    </th>
                    <th>
                        {{ trans('cruds.calDevice.fields.init_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.calDevice.fields.owner') }}
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
@can('cal_device_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.cal-devices.massDestroy') }}",
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
    ajax: "{{ route('admin.cal-devices.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'description', name: 'description' },
{ data: 'serial_number', name: 'serial_number' },
{ data: 'source_name', name: 'source.name' },
{ data: 'type_name', name: 'type.name' },
{ data: 'period_name', name: 'period.name' },
{ data: 'location_name', name: 'location.name' },
{ data: 'init_date', name: 'init_date' },
{ data: 'owner_name', name: 'owner.name' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-CalDevice').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection