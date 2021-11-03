@extends('layouts.admin')
@section('content')
@can('period_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('pacsys.periods.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.period.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.period.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Period">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.period.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.period.fields.period') }}
                        </th>
                        <th>
                            {{ trans('cruds.period.fields.description') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($periods as $key => $period)
                        <tr data-entry-id="{{ $period->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $period->id ?? '' }}
                            </td>
                            <td>
                                {{ $period->period ?? '' }}
                            </td>
                            <td>
                                {{ $period->description ?? '' }}
                            </td>
                            <td>
                                @can('period_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('pacsys.periods.show', $period->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('period_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('pacsys.periods.edit', $period->id) }}">
                                        Edit
                                    </a>
                                @endcan

                                @can('period_delete')
                                    <form action="{{ route('pacsys.periods.destroy', $period->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('period_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('pacsys.periods.massDestroy') }}",
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
  let table = $('.datatable-Period:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection