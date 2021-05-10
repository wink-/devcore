<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrinterRequest;
use App\Http\Requests\UpdatePrinterRequest;
use App\Models\Printer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PrintersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('printer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $printers = Printer::all();

        return view('admin.printers.index', compact('printers'));
    }

    public function create()
    {
        abort_if(Gate::denies('printer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.printers.create');
    }

    public function store(StorePrinterRequest $request)
    {
        $printer = Printer::create($request->all());

        return redirect()->route('admin.printers.index');
    }

    public function edit(Printer $printer)
    {
        abort_if(Gate::denies('printer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.printers.edit', compact('printer'));
    }

    public function update(UpdatePrinterRequest $request, Printer $printer)
    {
        $printer->update($request->all());

        return redirect()->route('admin.printers.index');
    }

    public function show(Printer $printer)
    {
        abort_if(Gate::denies('printer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.printers.show', compact('printer'));
    }
}
