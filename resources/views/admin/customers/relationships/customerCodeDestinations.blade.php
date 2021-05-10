<div class="m-3">
    @can('destination_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.destinations.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.destination.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.destination.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-customerCodeDestinations">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.destination.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.destination.fields.code') }}
                            </th>
                            <th>
                                {{ trans('cruds.destination.fields.name') }}
                            </th>
                            <th>
                                {{ trans('cruds.destination.fields.physical_address') }}
                            </th>
                            <th>
                                {{ trans('cruds.destination.fields.city') }}
                            </th>
                            <th>
                                {{ trans('cruds.destination.fields.state') }}
                            </th>
                            <th>
                                {{ trans('cruds.destination.fields.customer_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.customer.fields.name') }}
                            </th>
                            <th>
                                {{ trans('cruds.destination.fields.company_phone') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($destinations as $key => $destination)
                            <tr data-entry-id="{{ $destination->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $destination->id ?? '' }}
                                </td>
                                <td>
                                    {{ $destination->code ?? '' }}
                                </td>
                                <td>
                                    {{ $destination->name ?? '' }}
                                </td>
                                <td>
                                    {{ $destination->physical_address ?? '' }}
                                </td>
                                <td>
                                    {{ $destination->city ?? '' }}
                                </td>
                                <td>
                                    {{ $destination->state ?? '' }}
                                </td>
                                <td>
                                    {{ $destination->customer_code->code ?? '' }}
                                </td>
                                <td>
                                    {{ $destination->customer_code->name ?? '' }}
                                </td>
                                <td>
                                    {{ $destination->company_phone ?? '' }}
                                </td>
                                <td>
                                    @can('destination_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.destinations.show', $destination->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('destination_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.destinations.edit', $destination->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('destination_delete')
                                        <form action="{{ route('admin.destinations.destroy', $destination->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('destination_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.destinations.massDestroy') }}",
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
  let table = $('.datatable-customerCodeDestinations:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  $('div#sidebar').on('transitionend', function(e) {
    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
  })
  
})

</script>
@endsection