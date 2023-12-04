<?php

namespace App\Http\Controllers\Sections\Pricing;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Pricing;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.pricing.detail.manage',[
            'options' => Option::all(),
            'pricings' => Pricing::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.pricing.detail.index',[
            'pricings' => Pricing::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Option::createDetail($request);
        return back()->with('message','Option content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.pricing.detail.detail', [
            'option' => Option::find($id),
            'pricings' => Pricing::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.pricing.detail.detail', [
            'option' => Option::find($id),
            'pricings' => Pricing::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Option::updateDetail($request, $id);
        return redirect('/option')->with('message','Option content update successfully.');
    }

    /**
     * Change the specified seen or unseen in status.
     */
    public function changeStatus($id)
    {
        $getStatus = Option::select('status')->where('id',$id)->first();
        if($getStatus->status == 'off')
        {
            $status = 'on';
        }
        elseif($getStatus->status == 'on')
        {
            $status = 'off';
        }
        Option::where('id',$id)->update(['status'=>$status]);
        return back()->with('message','Option Status changed successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Option::deleteDetail($id);
        return redirect('/option')->with('message', 'Option content delete successfully.');
    }
}
