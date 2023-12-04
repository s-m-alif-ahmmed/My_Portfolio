<?php

namespace App\Http\Controllers\Sections\Achievement;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.achievement.achievement.manage',[
            'achievements' => Achievement::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.achievement.achievement.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Achievement::createAchievement($request);
        return back()->with('message','Achievement save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.achievement.achievement.detail', [
            'achievement' => Achievement::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.achievement.achievement.edit',[
            'achievement' => Achievement::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Achievement::updateAchievement($request, $id);
        return redirect('/achievement')->with('message','Achievement update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Achievement::deleteAchievement($id);
        return redirect('/achievement')->with('message', 'Achievement delete successfully.');
    }
}
