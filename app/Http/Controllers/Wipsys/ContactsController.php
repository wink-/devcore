<?php

namespace App\Http\Controllers\Wipsys;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wipsys\MassDestroyContactRequest;
use App\Http\Requests\Wipsys\StoreContactRequest;
use App\Http\Requests\Wipsys\UpdateContactRequest;
use App\Models\Wipsys\Contact;
use App\Models\Wipsys\Customer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wipsys_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contacts = Contact::with(['customer'])->get();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        abort_if(Gate::denies('wipsys_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::all()->pluck('code', 'id')->prepend('Please Select', '');

        return view('admin.contacts.create', compact('customers'));
    }

    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->all());

        return redirect()->route('admin.contacts.index');
    }

    public function edit(Contact $contact)
    {
        abort_if(Gate::denies('wipsys_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = Customer::all()->pluck('code', 'id')->prepend('Please Select', '');

        $contact->load('customer');

        return view('admin.contacts.edit', compact('customers', 'contact'));
    }

    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->update($request->all());

        return redirect()->route('admin.contacts.index');
    }

    public function show(Contact $contact)
    {
        abort_if(Gate::denies('wipsys_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contact->load('customer');

        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        abort_if(Gate::denies('wipsys_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contact->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactRequest $request)
    {
        Contact::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
