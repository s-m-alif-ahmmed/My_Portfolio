<?php

namespace App\Http\Controllers\Sections\Achievement;

use App\Http\Controllers\Controller;
use App\Models\AchievementTitle;
use Illuminate\Http\Request;

class AchievementTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.achievement.title.manage',[
            'achievement_titles' => AchievementTitle::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('admin.section.achievement.title.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        AchievementTitle::createAchievementTitle($request);
        return back()->with('message','Achievement Title save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.achievement.title.detail', [
            'achievement_title' => AchievementTitle::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.achievement.achievement.edit',[
            'achievement_title' => AchievementTitle::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        AchievementTitle::updateAchievementTitle($request, $id);
        return redirect('/achievement-title')->with('message','Achievement Title update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AchievementTitle::deleteAchievementTitle($id);
        return redirect('/achievement-title')->with('message', 'Achievement Title delete successfully.');
    }
}
