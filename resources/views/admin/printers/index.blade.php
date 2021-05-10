@extends('layouts.admin')
@section('content')
@can('printer_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.printers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.printer.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.printer.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Printer">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.printer.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.printer.fields.printer') }}
                        </th>
                        <th>
                            {{ trans('cruds.printer.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.printer.fields.archive') }}
                        </th>
                        <th>
                            {{ trans('cruds.printer.fields.revision') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($printers as $key => $printer)
                        <tr data-entry-id="{{ $printer->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $printer->id ?? '' }}
                            </td>
                            <td>
                                {{ $printer->printer ?? '' }}
                            </td>
                            <td>
                                {{ $printer->description ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $printer->archive ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $printer->archive ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $printer->revision ?? '' }}
                            </td>
                            <td>
                                @can('printer_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.printers.show', $printer->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('printer_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.printers.edit', $printer->id) }}">
                                        {{ trans('global.edit') }}
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
  let table = $('.datatable-Printer:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection