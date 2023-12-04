<?php

namespace App\Http\Controllers\Sections\Pricing;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.pricing.pricing.manage',[
            'pricings' => Pricing::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.pricing.pricing.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pricing::createPricing($request);
        return back()->with('message','Pricing content save successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.section.pricing.pricing.detail', [
            'pricing' => Pricing::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.section.pricing.pricing.edit', [
            'pricing' => Pricing::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Pricing::updatePricing($request, $id);
        return redirect('/pricing')->with('message','Pricing content update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pricing::deletePricing($id);
        return redirect('/pricing')->with('message', 'Pricing content delete successfully.');
    }
}
