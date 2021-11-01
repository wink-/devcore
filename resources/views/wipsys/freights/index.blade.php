@extends('layouts.admin')
@section('content')
@can('freight_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.freights.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.freight.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.freight.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Freight">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.freight.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.freight.fields.code') }}
                        </th>
                        <th>
                            {{ trans('cruds.freight.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.freight.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.freight.fields.archive') }}
                        </th>
                        <th>
                            {{ trans('cruds.freight.fields.revision') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($freights as $key => $freight)
                        <tr data-entry-id="{{ $freight->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $freight->id ?? '' }}
                            </td>
                            <td>
                                {{ $freight->code ?? '' }}
                            </td>
                            <td>
                                {{ $freight->name ?? '' }}
                            </td>
                            <td>
                                {{ $freight->description ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $freight->archive ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $freight->archive ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $freight->revision ?? '' }}
                            </td>
                            <td>
                                @can('freight_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.freights.show', $freight->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('freight_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.freights.edit', $freight->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('freight_delete')
                                    <form action="{{ route('admin.freights.destroy', $freight->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('freight_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.freights.massDestroy') }}",
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
  let table = $('.datatable-Freight:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection