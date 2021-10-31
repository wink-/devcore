<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDestinationRequest;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Models\Wipsys\Customer;
use App\Models\Wipsys\Destination;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DestinationsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $destinations = Destination::with(['customer_code'])->get();

        return view('admin.destinations.index', compact('destinations'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customer_codes = Customer::all()->pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.destinations.create', compact('customer_codes'));
    }

    public function store(StoreDestinationRequest $request)
    {
        $destination = Destination::create($request->all());

        return redirect()->route('admin.destinations.index');
    }

    public function edit(Destination $destination)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customer_codes = Customer::all()->pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $destination->load('customer_code');

        return view('admin.destinations.edit', compact('customer_codes', 'destination'));
    }

    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        $destination->update($request->all());

        return redirect()->route('admin.destinations.index');
    }

    public function show(Destination $destination)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $destination->load('customer_code');

        return view('admin.destinations.show', compact('destination'));
    }

    public function destroy(Destination $destination)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $destination->delete();

        return back();
    }

    public function massDestroy(MassDestroyDestinationRequest $request)
    {
        Destination::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
