<div class="m-3">
    @can('workorder_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.workorders.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.workorder.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.workorder.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-partWorkorders">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.number') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.customer_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.part') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.part_number') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.process_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.price') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.price_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.date_received') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.date_required') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.customer_purchase_order') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.customer_packing_list') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.quantity') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.unit_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.quantity_shipped') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.our_last_packing_list') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.destination_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.carrier_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.freight_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.date_shipped') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.invoice_number') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.invoice_date') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.invoice_amount') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.priority') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.rework') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.hot') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.started') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.completed') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.shipped') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.cod') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorder.fields.invoiced') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($workorders as $key => $workorder)
                            <tr data-entry-id="{{ $workorder->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $workorder->id ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->number ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->customer_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->part->number ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->part_number ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->process_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->price ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->price_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->date_received ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->date_required ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->customer_purchase_order ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->customer_packing_list ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->quantity ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->unit_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->quantity_shipped ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->our_last_packing_list ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->destination_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->carrier_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->freight_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->date_shipped ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->invoice_number ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->invoice_date ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->invoice_amount ?? '' }}
                                </td>
                                <td>
                                    {{ $workorder->priority ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorder->rework ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorder->rework ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorder->hot ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorder->hot ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorder->started ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorder->started ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorder->completed ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorder->completed ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorder->shipped ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorder->shipped ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorder->cod ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorder->cod ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorder->invoiced ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorder->invoiced ? 'checked' : '' }}>
                                </td>
                                <td>
                                    @can('workorder_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.workorders.show', $workorder->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('workorder_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.workorders.edit', $workorder->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('workorder_delete')
                                        <form action="{{ route('admin.workorders.destroy', $workorder->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('workorder_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.workorders.massDestroy') }}",
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
  let table = $('.datatable-partWorkorders:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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