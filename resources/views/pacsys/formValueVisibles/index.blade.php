@extends('layouts.admin')
@section('content')
@can('form_value_visible_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('pacsys.form-value-visibles.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.formValueVisible.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.formValueVisible.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-FormValueVisible">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.form_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_7') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_8') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_9') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_10') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_11') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_12') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_13') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_14') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_15') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_16') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_17') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_18') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_19') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.visible_20') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.tank') }}
                        </th>
                        <th>
                            {{ trans('cruds.formValueVisible.fields.timestamp') }}
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($formValueVisibles as $key => $formValueVisible)
                        <tr data-entry-id="{{ $formValueVisible->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $formValueVisible->id ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->name ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->form_name ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_1 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_2 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_3 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_4 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_5 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_6 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_7 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_8 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_9 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_10 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_11 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_12 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_13 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_14 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_15 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_16 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_17 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_18 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_19 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->visible_20 ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->tank ?? '' }}
                            </td>
                            <td>
                                {{ $formValueVisible->timestamp ?? '' }}
                            </td>
                            <td>
                                @can('form_value_visible_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('pacsys.form-value-visibles.show', $formValueVisible->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('form_value_visible_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('pacsys.form-value-visibles.edit', $formValueVisible->id) }}">
                                        Edit
                                    </a>
                                @endcan

                                @can('form_value_visible_delete')
                                    <form action="{{ route('pacsys.form-value-visibles.destroy', $formValueVisible->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('form_value_visible_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('pacsys.form-value-visibles.massDestroy') }}",
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
  let table = $('.datatable-FormValueVisible:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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
})

</script>
@endsection