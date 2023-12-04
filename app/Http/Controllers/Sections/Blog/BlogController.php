<?php

namespace App\Http\Controllers\Sections\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.blog.blog.manage',[
            'blogs' => Blog::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.blog.blog.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::createBlog($request);
        return back()->with('message','Blog content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.blog.blog.detail', [
            'blog' => Blog::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.blog.blog.edit',['blog' => Blog::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/blog')->with('message','Blog content update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::deleteBlog($id);
        return redirect('/blog')->with('message', 'Blog content delete successfully.');
    }
}
