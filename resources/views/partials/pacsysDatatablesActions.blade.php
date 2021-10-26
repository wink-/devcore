@can($viewGate)
    <a class="btn btn-xs btn-primary" href="{{ route('pacsys.' . $crudRoutePart . '.show', $row->getKey()) }}">
        View
    </a>
@endcan
@can($editGate)
    <a class="btn btn-xs btn-info" href="{{ route('pacsys.' . $crudRoutePart . '.edit', $row->getKey()) }}">
        Edit
    </a>
@endcan
@can($deleteGate)
    <form action="{{ route('pacsys.' . $crudRoutePart . '.destroy', $row->getKey()) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
    </form>
@endcan
