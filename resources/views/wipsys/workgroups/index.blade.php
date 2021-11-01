@extends('layouts.admin')
@section('content')
@can('workgroup_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.workgroups.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.workgroup.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.workgroup.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Workgroup">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.workgroup.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.workgroup.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.workgroup.fields.process_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.workgroup.fields.method_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.workgroup.fields.step_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.workgroup.fields.revision') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($workgroups as $key => $workgroup)
                        <tr data-entry-id="{{ $workgroup->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $workgroup->id ?? '' }}
                            </td>
                            <td>
                                {{ $workgroup->name ?? '' }}
                            </td>
                            <td>
                                {{ $workgroup->process_code ?? '' }}
                            </td>
                            <td>
                                {{ $workgroup->method_code ?? '' }}
                            </td>
                            <td>
                                {{ $workgroup->step_code ?? '' }}
                            </td>
                            <td>
                                {{ $workgroup->revision ?? '' }}
                            </td>
                            <td>
                                @can('workgroup_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.workgroups.show', $workgroup->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('workgroup_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.workgroups.edit', $workgroup->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('workgroup_delete')
                                    <form action="{{ route('admin.workgroups.destroy', $workgroup->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('workgroup_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.workgroups.massDestroy') }}",
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
  let table = $('.datatable-Workgroup:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection