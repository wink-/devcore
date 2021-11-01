@extends('layouts.admin')
@section('content')
@can('procedure_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.procedures.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.procedure.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.procedure.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Procedure">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.procedure.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.procedure.fields.code') }}
                        </th>
                        <th>
                            {{ trans('cruds.procedure.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.procedure.fields.document') }}
                        </th>
                        <th>
                            {{ trans('cruds.procedure.fields.minimum_price') }}
                        </th>
                        <th>
                            {{ trans('cruds.procedure.fields.each_price') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($procedures as $key => $procedure)
                        <tr data-entry-id="{{ $procedure->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $procedure->id ?? '' }}
                            </td>
                            <td>
                                {{ $procedure->code ?? '' }}
                            </td>
                            <td>
                                {{ $procedure->description ?? '' }}
                            </td>
                            <td>
                                {{ $procedure->document ?? '' }}
                            </td>
                            <td>
                                {{ $procedure->minimum_price ?? '' }}
                            </td>
                            <td>
                                {{ $procedure->each_price ?? '' }}
                            </td>
                            <td>
                                @can('procedure_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.procedures.show', $procedure->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('procedure_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.procedures.edit', $procedure->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('procedure_delete')
                                    <form action="{{ route('admin.procedures.destroy', $procedure->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('procedure_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.procedures.massDestroy') }}",
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
  let table = $('.datatable-Procedure:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection