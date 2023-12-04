<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use App\Models\Copyright;
use Illuminate\Http\Request;

class CopyrightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.copyright.manage',[
            'copyrights' => Copyright::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.copyright.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Copyright::createCopyright($request);
        return back()->with('message','Copyright content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.copyright.detail', [
            'copyright' => Copyright::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.copyright.edit',[
            'copyright' => Copyright::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Copyright::updateCopyright($request, $id);
        return redirect('/copyright')->with('message','Copyright content update successfully.');
    }

    /**
     * Change the specified seen or unseen in status.
     */
    public function changeStatus($id)
    {
        $getStatus = Copyright::select('status')->where('id',$id)->first();
        if($getStatus->status == 'show')
        {
            $status = 'hide';
        }
        elseif($getStatus->status == 'hide')
        {
            $status = 'show';
        }
        Copyright::where('id',$id)->update(['status'=>$status]);
        return back()->with('message','Copyright Status changed successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Copyright::deleteCopyright($id);
        return redirect('/copyright')->with('message', 'Copyright content delete successfully.');
    }
}
