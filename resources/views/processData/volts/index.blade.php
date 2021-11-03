@extends('layouts.admin')
@section('content')
@can('process_data_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('processdata.volts.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.volt.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.volt.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Volt">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.volt.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.volt.fields.record') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.volt.fields.volt') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($volts as $key => $volt)
                        <tr data-entry-id="{{ $volt->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $volt->id ?? '' }}
                            </td>
                            <td>
                                {{ $volt->record->name ?? '' }}
                            </td>
                            <td>
                                {{ $volt->record->description ?? '' }}
                            </td>
                            <td>
                                {{ $volt->volt ?? '' }}
                            </td>
                            <td>
                                @can('process_data_access')
                                    <a class="btn btn-xs btn-primary" href="{{ route('processdata.volts.show', $volt->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('process_data_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('processdata.volts.edit', $volt->id) }}">
                                        Edit
                                    </a>
                                @endcan

                                @can('process_data_delete')
                                    <form action="{{ route('processdata.volts.destroy', $volt->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('process_data_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('processdata.volts.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
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

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Volt:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection