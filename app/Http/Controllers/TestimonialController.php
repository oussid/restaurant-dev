<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.testimonial.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|max:16',
            'date' => 'required|date',
            'text' => 'required|max:256',
            'url' => 'required|url',
            'image' => 'required|mimes:png,jpg,jpeg|max:5000',
        ]);

        $uniqueImageName =  time().'-'.$request->name. '.' .$request->image->extension();
        $request->image->move(public_path('uploads'), $uniqueImageName);
        $fields['image'] = 'uploads/' . $uniqueImageName;

        Testimonial::create($fields);
        
        return redirect()->back()->with('success', 'Testimonial successfully added ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
