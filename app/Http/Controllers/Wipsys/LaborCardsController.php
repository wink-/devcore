<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateLaborCardRequest;
use App\Models\LaborCard;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LaborCardsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('labor_card_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LaborCard::query()->select(sprintf('%s.*', (new LaborCard)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'labor_card_show';
                $editGate      = 'labor_card_edit';
                $deleteGate    = 'labor_card_delete';
                $crudRoutePart = 'labor-cards';

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
            $table->editColumn('work_order_number', function ($row) {
                return $row->work_order_number ? $row->work_order_number : "";
            });
            $table->editColumn('employee_code', function ($row) {
                return $row->employee_code ? $row->employee_code : "";
            });
            $table->editColumn('step_code', function ($row) {
                return $row->step_code ? $row->step_code : "";
            });

            $table->editColumn('actual_hours', function ($row) {
                return $row->actual_hours ? $row->actual_hours : "";
            });
            $table->editColumn('man_hours', function ($row) {
                return $row->man_hours ? $row->man_hours : "";
            });
            $table->editColumn('actual_pieces', function ($row) {
                return $row->actual_pieces ? $row->actual_pieces : "";
            });
            $table->editColumn('equipment_code', function ($row) {
                return $row->equipment_code ? $row->equipment_code : "";
            });
            $table->editColumn('equipment_quantity', function ($row) {
                return $row->equipment_quantity ? $row->equipment_quantity : "";
            });
            $table->editColumn('loads', function ($row) {
                return $row->loads ? $row->loads : "";
            });
            $table->editColumn('cycle_time', function ($row) {
                return $row->cycle_time ? $row->cycle_time : "";
            });

            $table->editColumn('session', function ($row) {
                return $row->session ? $row->session : "";
            });
            $table->editColumn('archive', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->archive ? 'checked' : null) . '>';
            });
            $table->editColumn('revision', function ($row) {
                return $row->revision ? $row->revision : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'archive']);

            return $table->make(true);
        }

        return view('admin.laborCards.index');
    }

    public function edit(LaborCard $laborCard)
    {
        abort_if(Gate::denies('labor_card_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.laborCards.edit', compact('laborCard'));
    }

    public function update(UpdateLaborCardRequest $request, LaborCard $laborCard)
    {
        $laborCard->update($request->all());

        return redirect()->route('admin.labor-cards.index');
    }

    public function show(LaborCard $laborCard)
    {
        abort_if(Gate::denies('labor_card_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.laborCards.show', compact('laborCard'));
    }
}
