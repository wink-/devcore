@extends('layouts.admin')
@section('content')
@can('cal_type_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.cal-types.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.calType.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.calType.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CalType">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.calType.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.calType.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.calType.fields.proc_link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($calTypes as $key => $calType)
                        <tr data-entry-id="{{ $calType->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $calType->id ?? '' }}
                            </td>
                            <td>
                                {{ $calType->name ?? '' }}
                            </td>
                            <td>
                                {{ $calType->proc_link ?? '' }}
                            </td>
                            <td>
                                @can('cal_type_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.cal-types.show', $calType->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('cal_type_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.cal-types.edit', $calType->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('cal_type_delete')
                                    <form action="{{ route('admin.cal-types.destroy', $calType->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('cal_type_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.cal-types.massDestroy') }}",
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
  let table = $('.datatable-CalType:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection