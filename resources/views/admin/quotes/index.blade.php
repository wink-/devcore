@extends('layouts.admin')
@section('content')
@can('quote_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.quotes.create') }}">
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
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Quote">
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
                <tr>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($customers as $key => $item)
                                <option value="{{ $item->code }}">{{ $item->code }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($contacts as $key => $item)
                                <option value="{{ $item->first_name }}">{{ $item->first_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($processes as $key => $item)
                                <option value="{{ $item->code }}">{{ $item->code }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($users as $key => $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('quote_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.quotes.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.quotes.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'customer_code', name: 'customer.code' },
{ data: 'customer.name', name: 'customer.name' },
{ data: 'customer_code', name: 'customer_code' },
{ data: 'customer_name', name: 'customer_name' },
{ data: 'contact_first_name', name: 'contact.first_name' },
{ data: 'contact.last_name', name: 'contact.last_name' },
{ data: 'customer_rfq', name: 'customer_rfq' },
{ data: 'part_number', name: 'part_number' },
{ data: 'revision_code', name: 'revision_code' },
{ data: 'part_description', name: 'part_description' },
{ data: 'specification', name: 'specification' },
{ data: 'material', name: 'material' },
{ data: 'process_code', name: 'process.code' },
{ data: 'process.name', name: 'process.name' },
{ data: 'method_code', name: 'method_code' },
{ data: 'method', name: 'method' },
{ data: 'quantity_minimum', name: 'quantity_minimum' },
{ data: 'quantity_maximum', name: 'quantity_maximum' },
{ data: 'price', name: 'price' },
{ data: 'units', name: 'units' },
{ data: 'minimum_lot_charge', name: 'minimum_lot_charge' },
{ data: 'surface_area', name: 'surface_area' },
{ data: 'thickness_minimum', name: 'thickness_minimum' },
{ data: 'thickness_maximum', name: 'thickness_maximum' },
{ data: 'baking', name: 'baking' },
{ data: 'baking_time_pre', name: 'baking_time_pre' },
{ data: 'baking_temp_pre', name: 'baking_temp_pre' },
{ data: 'baking_time_post', name: 'baking_time_post' },
{ data: 'baking_temp_post', name: 'baking_temp_post' },
{ data: 'bake_notes', name: 'bake_notes' },
{ data: 'blasting', name: 'blasting' },
{ data: 'blast_notes', name: 'blast_notes' },
{ data: 'masking', name: 'masking' },
{ data: 'mask_notes', name: 'mask_notes' },
{ data: 'testing', name: 'testing' },
{ data: 'test_notes', name: 'test_notes' },
{ data: 'user_name', name: 'user.name' },
{ data: 'value_min', name: 'value_min' },
{ data: 'value_max', name: 'value_max' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Quote').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
});

</script>
@endsection