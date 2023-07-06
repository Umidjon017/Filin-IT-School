<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTelephoneAddressRequest;
use App\Http\Requests\Admin\UpdateTelephoneAddressRequest;
use App\Models\Admin\TelephoneAddress;
use Illuminate\View\View;

class TelephoneAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $telephoneAddress = TelephoneAddress::paginate(10, ['*'], 'telephone_addresses');

        return view('admin.telephone-address.index', compact('telephoneAddress'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.telephone-address.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTelephoneAddressRequest $request)
    {
        $data = $request->all();

        $telephoneAddress = TelephoneAddress::create($data);

        return redirect()->route('admin.telephone-address.index')->withSuccess($telephoneAddress['telephone'] . ' - telephone-address has successfully stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TelephoneAddress $telephoneAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TelephoneAddress $telephoneAddress): View
    {
        return view('admin.telephone-address.edit', compact('telephoneAddress'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTelephoneAddressRequest $request, TelephoneAddress $telephoneAddress)
    {
        $data = $request->all();

        $telephoneAddress->update($data);

        return redirect()->route('admin.telephone-address.index')->withSuccess($telephoneAddress['telephone'] . ' - telephone-address has successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TelephoneAddress $telephoneAddress)
    {
        $telephoneAddress->delete();

        return redirect()->route('admin.telephone-address.index')->withSuccess($telephoneAddress['telephone'] . ' - telephone-address has successfully deleted!');
    }
}
