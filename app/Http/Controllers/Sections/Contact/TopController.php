<?php

namespace App\Http\Controllers\Sections\Contact;

use App\Http\Controllers\Controller;
use App\Models\Top;
use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.contact.top.manage',[
            'tops' => Top::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('admin.section.contact.top.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Top::createTop($request);
        return back()->with('message','Top content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.contact.top.detail', [
            'top' => Top::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.contact.top.edit',['top' => Top::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Top::updateTop($request, $id);
        return redirect('/top')->with('message','Top content update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Top::deleteTop($id);
        return redirect('/top')->with('message', 'Top content delete successfully.');
    }
}
