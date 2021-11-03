@extends('layouts.admin')
@section('content')
@can('equipment_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('wipsys.equipment.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.equipment.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.equipment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Equipment">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.equipment.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.equipment.fields.code') }}
                        </th>
                        <th>
                            {{ trans('cruds.equipment.fields.description') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($equipment as $key => $equipment)
                        <tr data-entry-id="{{ $equipment->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $equipment->id ?? '' }}
                            </td>
                            <td>
                                {{ $equipment->code ?? '' }}
                            </td>
                            <td>
                                {{ $equipment->description ?? '' }}
                            </td>
                            <td>
                                @can('equipment_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('wipsys.equipment.show', $equipment->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('equipment_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('wipsys.equipment.edit', $equipment->id) }}">
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
  let table = $('.datatable-Equipment:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection