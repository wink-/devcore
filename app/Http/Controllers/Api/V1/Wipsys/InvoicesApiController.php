<?php

namespace App\Http\Controllers\Api\V1\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Resources\Wipsys\InvoiceResource;
use App\Models\Wipsys\Invoice;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InvoicesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('invoice_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InvoiceResource(Invoice::all());
    }

    public function show(Invoice $invoice)
    {
        abort_if(Gate::denies('invoice_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InvoiceResource($invoice);
    }
}
