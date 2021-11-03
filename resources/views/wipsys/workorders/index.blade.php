<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Livewire Tables</title>

</head>
@extends('layouts.admin')
@section('content')
@can('wipsys_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('wipsys.workorders.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.workorder.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<body>
	<livewire:workorders-table/>
	
    <livewire:scripts />
{{--    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>--}}
    <script src="https://unpkg.com/@nextapps-be/livewire-sortablejs@0.1.1/dist/livewire-sortable.js"></script>
</body>
</html>