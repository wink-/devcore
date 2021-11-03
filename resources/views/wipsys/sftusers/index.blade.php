@extends('layouts.admin')
@section('content')
@can('sftuser_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('wipsys.sftusers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.sftuser.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.sftuser.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Sftuser">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.sftuser.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.sftuser.fields.userid') }}
                        </th>
                        <th>
                            {{ trans('cruds.sftuser.fields.code') }}
                        </th>
                        <th>
                            {{ trans('cruds.sftuser.fields.user') }}
                        </th>
                        <th>
                            {{ trans('cruds.sftuser.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.sftuser.fields.password') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sftusers as $key => $sftuser)
                        <tr data-entry-id="{{ $sftuser->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $sftuser->id ?? '' }}
                            </td>
                            <td>
                                {{ $sftuser->userid ?? '' }}
                            </td>
                            <td>
                                {{ $sftuser->code ?? '' }}
                            </td>
                            <td>
                                {{ $sftuser->user ?? '' }}
                            </td>
                            <td>
                                {{ $sftuser->email ?? '' }}
                            </td>
                            <td>
                                {{ $sftuser->password ?? '' }}
                            </td>
                            <td>
                                @can('sftuser_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('wipsys.sftusers.show', $sftuser->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('sftuser_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('wipsys.sftusers.edit', $sftuser->id) }}">
                                        Edit
                                    </a>
                                @endcan

                                @can('sftuser_delete')
                                    <form action="{{ route('wipsys.sftusers.destroy', $sftuser->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('sftuser_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('wipsys.sftusers.massDestroy') }}",
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
  let table = $('.datatable-Sftuser:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection