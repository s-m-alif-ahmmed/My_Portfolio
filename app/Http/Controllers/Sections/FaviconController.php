<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use App\Models\Favicon;
use Illuminate\Http\Request;

class FaviconController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.favicon.manage',[
            'favicons' => Favicon::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.favicon.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Favicon::createFavicon($request);
        return back()->with('message','Favicon content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.favicon.detail', [
            'favicon' => Favicon::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.favicon.edit',[
            'favicon' => Favicon::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Favicon::updateFavicon($request, $id);
        return redirect('/favicon')->with('message','Favicon content update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Favicon::deleteFavicon($id);
        return redirect('/favicon')->with('message', 'Favicon content delete successfully.');
    }
}
