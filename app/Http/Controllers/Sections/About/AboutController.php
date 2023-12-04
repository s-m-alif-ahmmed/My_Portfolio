<?php

namespace App\Http\Controllers\Sections\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.about.about.manage',[
            'abouts' => About::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.about.about.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        About::createAbout($request);
        return back()->with('message','About save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.about.about.detail', [
            'about' => About::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.about.about.edit',[
            'about' => About::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        About::updateAbout($request, $id);
        return redirect('/about')->with('message','About update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        About::deleteAbout($id);
        return redirect('/about')->with('message', 'About delete successfully.');
    }
}
