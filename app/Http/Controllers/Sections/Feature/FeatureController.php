<?php

namespace App\Http\Controllers\Sections\Feature;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.feature.feature.manage',[
            'features' => Feature::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.feature.feature.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Feature::createFeature($request);
        return back()->with('message','Feature save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.feature.feature.detail', [
            'feature' => Feature::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.feature.feature.edit',[
            'feature' => Feature::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Feature::updateFeature($request, $id);
        return redirect('/feature')->with('message','Feature update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Feature::deleteFeature($id);
        return redirect('/feature')->with('message', 'Feature delete successfully.');
    }
}
