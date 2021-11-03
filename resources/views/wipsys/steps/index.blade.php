@extends('layouts.admin')
@section('content')
@can('step_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('wipsys.steps.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.step.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.step.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Step">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.step.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.step.fields.code') }}
                        </th>
                        <th>
                            {{ trans('cruds.step.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.step.fields.equipment_hours') }}
                        </th>
                        <th>
                            {{ trans('cruds.step.fields.archive') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($steps as $key => $step)
                        <tr data-entry-id="{{ $step->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $step->id ?? '' }}
                            </td>
                            <td>
                                {{ $step->code ?? '' }}
                            </td>
                            <td>
                                {{ $step->description ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $step->equipment_hours ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $step->equipment_hours ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $step->archive ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $step->archive ? 'checked' : '' }}>
                            </td>
                            <td>
                                @can('step_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('wipsys.steps.show', $step->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('step_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('wipsys.steps.edit', $step->id) }}">
                                        Edit
                                    </a>
                                @endcan

                                @can('step_delete')
                                    <form action="{{ route('wipsys.steps.destroy', $step->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('step_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('wipsys.steps.massDestroy') }}",
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
  let table = $('.datatable-Step:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection