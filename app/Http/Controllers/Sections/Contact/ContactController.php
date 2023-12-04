<?php

namespace App\Http\Controllers\Sections\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.contact.contact.manage',[
            'contacts' => Contact::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.home.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::createContact($request);
        return back()->with('message', 'message sent successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.contact.contact.detail', [
            'contact' => Contact::find($id),
            'contacts' => Contact::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Change the specified seen or unseen in status.
     */
    public function changeStatus($id)
    {
        $getStatus = Contact::select('status')->where('id',$id)->first();
        if($getStatus->status == 'unseen')
        {
            $status = 'seen';
        }
        elseif($getStatus->status == 'seen')
        {
            $status = 'unseen';
        }
        Contact::where('id',$id)->update(['status'=>$status]);
        return back()->with('message','Contact Status changed successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::deleteContact($id);
        return redirect('/contact')->with('message', 'Contact content delete successfully.');
    }
}
