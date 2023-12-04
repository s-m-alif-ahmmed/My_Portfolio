<?php

namespace App\Http\Controllers\Sections\Contact;

use App\Http\Controllers\Controller;
use App\Models\Head;
use Illuminate\Http\Request;

class HeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.contact.head.manage',[
            'heads' => Head::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('admin.section.contact.head.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Head::createHead($request);
        return back()->with('message','Head content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.contact.head.detail', [
            'head' => Head::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.contact.head.edit',['head' => Head::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Head::updateHead($request, $id);
        return redirect('/head')->with('message','Head content update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Head::deleteHead($id);
        return redirect('/head')->with('message', 'Head content delete successfully.');
    }
}
