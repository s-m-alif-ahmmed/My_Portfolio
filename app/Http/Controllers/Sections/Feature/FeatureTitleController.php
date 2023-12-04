<?php

namespace App\Http\Controllers\Sections\Feature;

use App\Http\Controllers\Controller;
use App\Models\FeatureTitle;
use Illuminate\Http\Request;

class FeatureTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.feature.title.manage',[
            'feature_titles' => FeatureTitle::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('admin.section.feature.title.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FeatureTitle::createFeatureTitle($request);
        return back()->with('message','FeatureTitle content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.feature.title.detail', [
            'feature_title' => FeatureTitle::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.feature.title.edit',[
            'feature_title' => FeatureTitle::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        FeatureTitle::updateFeatureTitle($request, $id);
        return redirect('/feature-title')->with('message','Feature Title content update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FeatureTitle::deleteFeatureTitle($id);
        return redirect('/feature-title')->with('message', 'FeatureTitle content delete successfully.');
    }
}
