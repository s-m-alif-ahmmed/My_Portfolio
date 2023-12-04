<?php

namespace App\Http\Controllers\Sections\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.client.client.manage',[
            'clients' => Client::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('admin.section.client.client.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Client::createClient($request);
        return back()->with('message','Client save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.client.client.detail', [
            'client' => Client::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.client.client.edit',['client' => Client::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Client::updateClient($request, $id);
        return redirect('/client')->with('message','Client update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::deleteClient($id);
        return redirect('/client')->with('message', 'Client delete successfully.');
    }
}



