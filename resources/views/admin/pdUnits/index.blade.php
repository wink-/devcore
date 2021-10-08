@extends('layouts.admin')
@section('content')
@can('pd_unit_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.pd-units.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.pdUnit.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.pdUnit.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PdUnit">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.pdUnit.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdUnit.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdUnit.fields.description') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pdUnits as $key => $pdUnit)
                        <tr data-entry-id="{{ $pdUnit->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $pdUnit->id ?? '' }}
                            </td>
                            <td>
                                {{ $pdUnit->name ?? '' }}
                            </td>
                            <td>
                                {{ $pdUnit->description ?? '' }}
                            </td>
                            <td>
                                @can('pd_unit_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.pd-units.show', $pdUnit->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('pd_unit_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.pd-units.edit', $pdUnit->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('pd_unit_delete')
                                    <form action="{{ route('admin.pd-units.destroy', $pdUnit->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('pd_unit_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.pd-units.massDestroy') }}",
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
  let table = $('.datatable-PdUnit:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection