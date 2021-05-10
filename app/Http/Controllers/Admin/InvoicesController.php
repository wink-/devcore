<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class InvoicesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('invoice_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Invoice::query()->select(sprintf('%s.*', (new Invoice)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'invoice_show';
                $editGate      = 'invoice_edit';
                $deleteGate    = 'invoice_delete';
                $crudRoutePart = 'invoices';

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
            $table->editColumn('customer_code', function ($row) {
                return $row->customer_code ? $row->customer_code : "";
            });
            $table->editColumn('customer_purchase_order', function ($row) {
                return $row->customer_purchase_order ? $row->customer_purchase_order : "";
            });

            $table->editColumn('note', function ($row) {
                return $row->note ? $row->note : "";
            });
            $table->editColumn('emails', function ($row) {
                return $row->emails ? $row->emails : "";
            });
            $table->editColumn('printed', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->printed ? 'checked' : null) . '>';
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

            $table->rawColumns(['actions', 'placeholder', 'printed', 'archive']);

            return $table->make(true);
        }

        return view('admin.invoices.index');
    }

    public function show(Invoice $invoice)
    {
        abort_if(Gate::denies('invoice_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.invoices.show', compact('invoice'));
    }
}
