<div class="m-3">
    @can('quote_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('wipsys.quotes.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.quote.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.quote.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-customerQuotes">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.customer') }}
                            </th>
                            <th>
                                {{ trans('cruds.customer.fields.name') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.customer_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.customer_name') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.contact') }}
                            </th>
                            <th>
                                {{ trans('cruds.contact.fields.last_name') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.customer_rfq') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.part_number') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.revision_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.part_description') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.specification') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.material') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.process') }}
                            </th>
                            <th>
                                {{ trans('cruds.process.fields.name') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.method_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.method') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.quantity_minimum') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.quantity_maximum') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.price') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.units') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.minimum_lot_charge') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.surface_area') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.thickness_minimum') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.thickness_maximum') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.baking') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.baking_time_pre') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.baking_temp_pre') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.baking_time_post') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.baking_temp_post') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.bake_notes') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.blasting') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.blast_notes') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.masking') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.mask_notes') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.testing') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.test_notes') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.user') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.value_min') }}
                            </th>
                            <th>
                                {{ trans('cruds.quote.fields.value_max') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($quotes as $key => $quote)
                            <tr data-entry-id="{{ $quote->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $quote->id ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->customer->code ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->customer->name ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->customer_code ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->customer_name ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->contact->first_name ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->contact->last_name ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->customer_rfq ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->part_number ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->revision_code ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->part_description ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->specification ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->material ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->process->code ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->process->name ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->method_code ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->method ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->quantity_minimum ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->quantity_maximum ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->price ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->units ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->minimum_lot_charge ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->surface_area ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->thickness_minimum ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->thickness_maximum ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $quote->baking ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $quote->baking ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $quote->baking_time_pre ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->baking_temp_pre ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->baking_time_post ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->baking_temp_post ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->bake_notes ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $quote->blasting ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $quote->blasting ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $quote->blast_notes ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $quote->masking ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $quote->masking ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $quote->mask_notes ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $quote->testing ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $quote->testing ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $quote->test_notes ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->user->name ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->value_min ?? '' }}
                                </td>
                                <td>
                                    {{ $quote->value_max ?? '' }}
                                </td>
                                <td>
                                    @can('quote_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('wipsys.quotes.show', $quote->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('quote_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('wipsys.quotes.edit', $quote->id) }}">
                                            Edit
                                        </a>
                                    @endcan

                                    @can('quote_delete')
                                        <form action="{{ route('wipsys.quotes.destroy', $quote->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('quote_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('wipsys.quotes.massDestroy') }}",
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
  let table = $('.datatable-customerQuotes:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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