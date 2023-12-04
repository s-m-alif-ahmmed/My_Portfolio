<?php

namespace App\Http\Controllers\Sections\About;

use App\Http\Controllers\Controller;
use App\Models\AboutTitle;
use Illuminate\Http\Request;

class AboutTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.about.title.manage',[
            'about_titles' => AboutTitle::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('admin.section.about.title.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        AboutTitle::createAboutTitle($request);
        return back()->with('message','About Title content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.about.title.detail', [
            'about_title' => AboutTitle::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.about.title.edit',[
            'about_title' => AboutTitle::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        AboutTitle::updateAboutTitle($request, $id);
        return redirect('/about-title')->with('message','About Title content update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AboutTitle::deleteAboutTitle($id);
        return redirect('/about-title')->with('message', 'About Title content delete successfully.');
    }
}
