@extends('layouts.admin')
@section('content')
@can('pd_record_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('processdata.pd-records.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.pdRecord.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.pdRecord.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PdRecord">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.active') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.logger') }}
                        </th>
                        <th>
                            {{ trans('cruds.logger.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.record_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.recordType.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.command') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.multiplier') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.unit') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdUnit.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.graph_y_lower') }}
                        </th>
                        <th>
                            {{ trans('cruds.pdRecord.fields.graph_y_upper') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pdRecords as $key => $pdRecord)
                        <tr data-entry-id="{{ $pdRecord->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $pdRecord->id ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $pdRecord->active ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $pdRecord->active ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $pdRecord->name ?? '' }}
                            </td>
                            <td>
                                {{ $pdRecord->logger->name ?? '' }}
                            </td>
                            <td>
                                {{ $pdRecord->logger->description ?? '' }}
                            </td>
                            <td>
                                {{ $pdRecord->record_type->name ?? '' }}
                            </td>
                            <td>
                                {{ $pdRecord->record_type->description ?? '' }}
                            </td>
                            <td>
                                {{ $pdRecord->command ?? '' }}
                            </td>
                            <td>
                                {{ $pdRecord->multiplier ?? '' }}
                            </td>
                            <td>
                                {{ $pdRecord->description ?? '' }}
                            </td>
                            <td>
                                {{ $pdRecord->unit->name ?? '' }}
                            </td>
                            <td>
                                {{ $pdRecord->unit->description ?? '' }}
                            </td>
                            <td>
                                {{ $pdRecord->graph_y_lower ?? '' }}
                            </td>
                            <td>
                                {{ $pdRecord->graph_y_upper ?? '' }}
                            </td>
                            <td>
                                @can('pd_record_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('processdata.pd-records.show', $pdRecord->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('pd_record_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('processdata.pd-records.edit', $pdRecord->id) }}">
                                        Edit
                                    </a>
                                @endcan

                                @can('pd_record_delete')
                                    <form action="{{ route('processdata.pd-records.destroy', $pdRecord->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('pd_record_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('processdata.pd-records.massDestroy') }}",
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
  let table = $('.datatable-PdRecord:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection