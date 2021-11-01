@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.log.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Log">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.log.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.log.fields.session') }}
                        </th>
                        <th>
                            {{ trans('cruds.log.fields.key_strokes') }}
                        </th>
                        <th>
                            {{ trans('cruds.log.fields.revision') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logs as $key => $log)
                        <tr data-entry-id="{{ $log->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $log->id ?? '' }}
                            </td>
                            <td>
                                {{ $log->session ?? '' }}
                            </td>
                            <td>
                                {{ $log->key_strokes ?? '' }}
                            </td>
                            <td>
                                {{ $log->revision ?? '' }}
                            </td>
                            <td>
                                @can('log_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.logs.show', $log->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
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
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Log:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection