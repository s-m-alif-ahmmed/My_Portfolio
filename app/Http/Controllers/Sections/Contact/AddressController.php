<?php

namespace App\Http\Controllers\Sections\Contact;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.contact.address.manage',[
            'addresses' => Address::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('admin.section.contact.address.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Address::createAddress($request);
        return back()->with('message','Address content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.contact.address.detail', [
            'address' => Address::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.contact.address.edit',['address' => Address::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Address::updateAddress($request, $id);
        return redirect('/address')->with('message','Address content update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Address::deleteAddress($id);
        return redirect('/address')->with('message', 'Address content delete successfully.');
    }
}
