<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartRequest;
use App\Http\Requests\UpdatePartRequest;
use App\Models\Wipsys\Workorder;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class WorkordersController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Workorder::query()->select(sprintf('%s.*', (new Workorder())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'wipsys_access';
                $editGate = 'wipsys_edit';
                $deleteGate = 'wapsys_delete';
                $crudRoutePart = 'workorders';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('number', function ($row) {
                return $row->number ? $row->number : '';
            });
            $table->editColumn('customer_code', function ($row) {
                return $row->customer_code ? $row->customer_code : '';
            });
            $table->editColumn('part_id', function ($row) {
                return $row->part_id ? $row->part_id : '';
            });
            $table->editColumn('part_number', function ($row) {
                return $row->part_number ? $row->part_number : '';
            });

            // $table->editColumn('process_code', function ($row) {
            //     return $row->process_code ? $row->process_code : '';
            // });            
            // $table->editColumn('revision_code', function ($row) {
            //     return $row->revision_code ? $row->revision_code : '';
            // });
            // $table->editColumn('description', function ($row) {
            //     return $row->description ? $row->description : '';
            // });
            // $table->editColumn('customer_name', function ($row) {
            //     return $row->customer_name ? $row->customer_name : '';
            // });
            // $table->editColumn('process_code', function ($row) {
            //     return $row->process_code ? $row->process_code : '';
            // });
            // $table->editColumn('price', function ($row) {
            //     return $row->price ? $row->price : '';
            // });
            // $table->editColumn('minimum_lot_charge', function ($row) {
            //     return $row->minimum_lot_charge ? $row->minimum_lot_charge : '';
            // });
            // $table->editColumn('quote', function ($row) {
            //     return $row->quote_id ? $row->quote_id : '';
            // });
            // $table->editColumn('specification', function ($row) {
            //     return $row->specification ? $row->specification : '';
            // });
            // $table->editColumn('procedure_code', function ($row) {
            //     return $row->procedure_code ? $row->procedure_code : '';
            // });
            // $table->editColumn('operator_note', function ($row) {
            //     return $row->operator_note ? $row->operator_note : '';
            // });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.workorders.index');
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workorders.create');
    }

    public function store(StoreWorkorderRequest $request)
    {
        $workorder = Workorder::create($request->all());

        return redirect()->route('admin.workorders.index');
    }

    public function edit(Workorder $workorder)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workorders.edit', compact('workorder'));
    }

    public function update(UpdateWorkorderRequest $request, Workorder $workorder)
    {
        $workorder->update($request->all());

        return redirect()->route('admin.workorders.index');
    }

    public function show(Workorder $workorder)
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workorder.show', compact('workorder'));
    }
}
