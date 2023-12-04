<?php

namespace App\Http\Controllers\Sections\Blog;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.blog.header.manage',[
            'headers' => Header::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.blog.header.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Header::createHeader($request);
        return back()->with('message','Header content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.blog.header.detail', [
            'header' => Header::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.blog.header.edit',['header' => Header::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Header::updateHeader($request, $id);
        return redirect('/header')->with('message','Header content update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Header::deleteHeader($id);
        return redirect('/header')->with('message', 'Header content delete successfully.');
    }
}
