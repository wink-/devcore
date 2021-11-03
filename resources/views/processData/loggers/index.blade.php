@extends('layouts.admin')
@section('content')
@can('logger_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('processdata.loggers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.logger.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.logger.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Logger">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.logger.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.logger.fields.active') }}
                        </th>
                        <th>
                            {{ trans('cruds.logger.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.logger.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.logger.fields.logger_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.loggerType.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.logger.fields.ip_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.logger.fields.port') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loggers as $key => $logger)
                        <tr data-entry-id="{{ $logger->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $logger->id ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $logger->active ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $logger->active ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $logger->name ?? '' }}
                            </td>
                            <td>
                                {{ $logger->description ?? '' }}
                            </td>
                            <td>
                                {{ $logger->logger_type->name ?? '' }}
                            </td>
                            <td>
                                {{ $logger->logger_type->description ?? '' }}
                            </td>
                            <td>
                                {{ $logger->ip_address ?? '' }}
                            </td>
                            <td>
                                {{ $logger->port ?? '' }}
                            </td>
                            <td>
                                @can('logger_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('processdata.loggers.show', $logger->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('logger_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('processdata.loggers.edit', $logger->id) }}">
                                        Edit
                                    </a>
                                @endcan

                                @can('logger_delete')
                                    <form action="{{ route('processdata.loggers.destroy', $logger->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('logger_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('processdata.loggers.massDestroy') }}",
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
  let table = $('.datatable-Logger:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection