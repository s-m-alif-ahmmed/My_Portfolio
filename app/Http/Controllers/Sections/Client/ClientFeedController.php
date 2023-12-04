<?php

namespace App\Http\Controllers\Sections\Client;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class ClientFeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.client.feedback.manage',[
            'feedbacks' => Feedback::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.client.feedback.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Feedback::createFeedback($request);
        return back()->with('message','Feedback save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.client.feedback.detail', [
            'feedback' => Feedback::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.client.feedback.edit',['feedback' => Feedback::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Feedback::updateFeedback($request, $id);
        return redirect('/feed')->with('message','Feedback update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Feedback::deleteFeedback($id);
        return redirect('/feed')->with('message', 'Feedback delete successfully.');
    }

}
