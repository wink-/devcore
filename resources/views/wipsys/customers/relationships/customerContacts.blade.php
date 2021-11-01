<div class="m-3">
    @can('contact_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.contacts.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.contact.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.contact.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-customerContacts">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.contact.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.contact.fields.customer') }}
                            </th>
                            <th>
                                {{ trans('cruds.customer.fields.name') }}
                            </th>
                            <th>
                                {{ trans('cruds.contact.fields.first_name') }}
                            </th>
                            <th>
                                {{ trans('cruds.contact.fields.last_name') }}
                            </th>
                            <th>
                                {{ trans('cruds.contact.fields.phone') }}
                            </th>
                            <th>
                                {{ trans('cruds.contact.fields.extension') }}
                            </th>
                            <th>
                                {{ trans('cruds.contact.fields.email') }}
                            </th>
                            <th>
                                {{ trans('cruds.contact.fields.cell') }}
                            </th>
                            <th>
                                {{ trans('cruds.contact.fields.quote_emails') }}
                            </th>
                            <th>
                                {{ trans('cruds.contact.fields.email_quote_print') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $key => $contact)
                            <tr data-entry-id="{{ $contact->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $contact->id ?? '' }}
                                </td>
                                <td>
                                    {{ $contact->customer->code ?? '' }}
                                </td>
                                <td>
                                    {{ $contact->customer->name ?? '' }}
                                </td>
                                <td>
                                    {{ $contact->first_name ?? '' }}
                                </td>
                                <td>
                                    {{ $contact->last_name ?? '' }}
                                </td>
                                <td>
                                    {{ $contact->phone ?? '' }}
                                </td>
                                <td>
                                    {{ $contact->extension ?? '' }}
                                </td>
                                <td>
                                    {{ $contact->email ?? '' }}
                                </td>
                                <td>
                                    {{ $contact->cell ?? '' }}
                                </td>
                                <td>
                                    {{ $contact->quote_emails ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $contact->email_quote_print ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $contact->email_quote_print ? 'checked' : '' }}>
                                </td>
                                <td>
                                    @can('contact_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.contacts.show', $contact->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('contact_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.contacts.edit', $contact->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('contact_delete')
                                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('contact_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.contacts.massDestroy') }}",
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
  let table = $('.datatable-customerContacts:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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