<div class="m-3">
    @can('workorderhistory_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('wipsys.workorderhistories.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.workorderhistory.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.workorderhistory.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-partWorkorderhistories">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.number') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.customer_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.customer_name') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.part') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.part_number') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.process_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.price') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.price_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.date_received') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.date_required') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.customer_purchase_order') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.customer_packing_list') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.quantity') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.unit_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.quantity_shipped') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.our_last_packing_list') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.destination_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.carrier_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.freight_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.date_shipped') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.invoice_number') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.invoice_date') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.invoice_amount') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.priority') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.rework') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.hot') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.started') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.completed') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.shipped') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.cod') }}
                            </th>
                            <th>
                                {{ trans('cruds.workorderhistory.fields.invoiced') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($workorderhistories as $key => $workorderhistory)
                            <tr data-entry-id="{{ $workorderhistory->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $workorderhistory->id ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->number ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->customer_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->customer_name ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->part->number ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->part_number ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->process_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->price ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->price_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->date_received ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->date_required ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->customer_purchase_order ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->customer_packing_list ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->quantity ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->unit_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->quantity_shipped ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->our_last_packing_list ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->destination_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->carrier_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->freight_code ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->date_shipped ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->invoice_number ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->invoice_date ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->invoice_amount ?? '' }}
                                </td>
                                <td>
                                    {{ $workorderhistory->priority ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorderhistory->rework ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorderhistory->rework ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorderhistory->hot ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorderhistory->hot ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorderhistory->started ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorderhistory->started ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorderhistory->completed ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorderhistory->completed ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorderhistory->shipped ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorderhistory->shipped ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorderhistory->cod ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorderhistory->cod ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $workorderhistory->invoiced ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $workorderhistory->invoiced ? 'checked' : '' }}>
                                </td>
                                <td>
                                    @can('workorderhistory_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('wipsys.workorderhistories.show', $workorderhistory->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('workorderhistory_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('wipsys.workorderhistories.edit', $workorderhistory->id) }}">
                                            Edit
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
</div>
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
  let table = $('.datatable-partWorkorderhistories:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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