<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.video.manage',[
            'videos' => Video::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('admin.section.video.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Video::createVideo($request);
        return back()->with('message','Video content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.video.detail', [
            'video' => Video::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.video.edit',['video' => Video::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Video::updateVideo($request, $id);
        return redirect('/video')->with('message','Video content update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Video::deleteVideo($id);
        return redirect('/video')->with('message', 'Video content delete successfully.');
    }
}
