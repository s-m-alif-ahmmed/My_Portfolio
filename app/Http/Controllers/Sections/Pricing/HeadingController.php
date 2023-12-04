<?php

namespace App\Http\Controllers\Sections\Pricing;

use App\Http\Controllers\Controller;
use App\Models\Heading;
use Illuminate\Http\Request;

class HeadingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.pricing.heading.manage',[
            'headings' => Heading::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('admin.section.pricing.heading.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Heading::createHeading($request);
        return back()->with('message','Heading content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.pricing.heading.detail', [
            'heading' => Heading::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.pricing.heading.edit',[
            'heading' => Heading::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Heading::updateHeading($request, $id);
        return redirect('/heading')->with('message','Heading content update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Heading::deleteHeading($id);
        return redirect('/heading')->with('message', 'Heading content delete successfully.');
    }
}
