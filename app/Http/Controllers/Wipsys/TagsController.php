<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\StoreTagRequest;
use App\Http\Requests\Wipsys\UpdateTagRequest;
use App\Models\Wipsys\Tag;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TagsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Tag::query()->select(sprintf('%s.*', (new Tag)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'wipsys_show';
                $editGate      = 'wipsys_edit';
                $deleteGate    = 'wipsys_delete';
                $crudRoutePart = 'tags';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('number', function ($row) {
                return $row->number ? $row->number : "";
            });
            $table->editColumn('work_order_number', function ($row) {
                return $row->work_order_number ? $row->work_order_number : "";
            });
            $table->editColumn('quantity', function ($row) {
                return $row->quantity ? $row->quantity : "";
            });
            $table->editColumn('quantity_shipped', function ($row) {
                return $row->quantity_shipped ? $row->quantity_shipped : "";
            });
            $table->editColumn('shipped', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->shipped ? 'checked' : null) . '>';
            });

            $table->editColumn('container', function ($row) {
                return $row->container ? $row->container : "";
            });
            $table->editColumn('sessionid', function ($row) {
                return $row->sessionid ? $row->sessionid : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'shipped']);

            return $table->make(true);
        }

        return view('admin.tags.index');
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tags.create');
    }

    public function store(StoreTagRequest $request)
    {
        $tag = Tag::create($request->all());

        return redirect()->route('admin.tags.index');
    }

    public function edit(Tag $tag)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tags.edit', compact('tag'));
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->all());

        return redirect()->route('admin.tags.index');
    }

    public function show(Tag $tag)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tags.show', compact('tag'));
    }
}
