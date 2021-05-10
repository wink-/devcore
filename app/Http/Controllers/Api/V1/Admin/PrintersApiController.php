<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrinterRequest;
use App\Http\Requests\UpdatePrinterRequest;
use App\Http\Resources\Admin\PrinterResource;
use App\Models\Printer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PrintersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('printer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PrinterResource(Printer::all());
    }

    public function store(StorePrinterRequest $request)
    {
        $printer = Printer::create($request->all());

        return (new PrinterResource($printer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Printer $printer)
    {
        abort_if(Gate::denies('printer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PrinterResource($printer);
    }

    public function update(UpdatePrinterRequest $request, Printer $printer)
    {
        $printer->update($request->all());

        return (new PrinterResource($printer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
