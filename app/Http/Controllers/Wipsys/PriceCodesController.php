<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPriceCodeRequest;
use App\Http\Requests\StorePriceCodeRequest;
use App\Http\Requests\UpdatePriceCodeRequest;
use App\Models\Wipsys\PriceCode;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PriceCodesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $priceCodes = PriceCode::all();

        return view('admin.priceCodes.index', compact('priceCodes'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priceCodes.create');
    }

    public function store(StorePriceCodeRequest $request)
    {
        $priceCode = PriceCode::create($request->all());

        return redirect()->route('admin.price-codes.index');
    }

    public function edit(PriceCode $priceCode)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priceCodes.edit', compact('priceCode'));
    }

    public function update(UpdatePriceCodeRequest $request, PriceCode $priceCode)
    {
        $priceCode->update($request->all());

        return redirect()->route('admin.price-codes.index');
    }

    public function show(PriceCode $priceCode)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.priceCodes.show', compact('priceCode'));
    }

    public function destroy(PriceCode $priceCode)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $priceCode->delete();

        return back();
    }

    public function massDestroy(MassDestroyPriceCodeRequest $request)
    {
        PriceCode::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
