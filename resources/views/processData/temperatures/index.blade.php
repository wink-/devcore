@extends('layouts.admin')
@section('content')
@can('temperature_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('processdata.temperatures.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.temperature.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.temperature.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Temperature">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.temperature.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.temperature.fields.record') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.temperature.fields.temperature') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($temperatures as $key => $temperature)
                        <tr data-entry-id="{{ $temperature->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $temperature->id ?? '' }}
                            </td>
                            <td>
                                {{ $temperature->record->name ?? '' }}
                            </td>
                            <td>
                                {{ $temperature->record->description ?? '' }}
                            </td>
                            <td>
                                {{ $temperature->temperature ?? '' }}
                            </td>
                            <td>
                                @can('temperature_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('processdata.temperatures.show', $temperature->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('temperature_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('processdata.temperatures.edit', $temperature->id) }}">
                                        Edit
                                    </a>
                                @endcan

                                @can('temperature_delete')
                                    <form action="{{ route('processdata.temperatures.destroy', $temperature->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('temperature_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('processdata.temperatures.massDestroy') }}",
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
  let table = $('.datatable-Temperature:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection