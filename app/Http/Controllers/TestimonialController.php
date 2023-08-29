<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('demo')->only(['store', 'update', 'destroy']);
    }

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
            'created_at' => 'required|date',
            'text' => 'required|max:256',
            'url' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:5000',
        ], ['created_at.required' => 'The date field is required.']);

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
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', ['testimonial' => $testimonial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
         // image is not required if it's already in the db
         $imageValidation;

         if($testimonial->image){
             $imageValidation = 'mimes:png,jpg,jpeg|max:5000';
             
            }else{
                $imageValidation = 'required|mimes:png,jpg,jpeg|max:5000';
                
         }

         $fields = $request->validate([
             'name' => 'required|max:32',
             'text' => 'required|max:256',
             'created_at' => 'required|date',
             'url' => 'required',
             'image' => $imageValidation,
            ], ['created_at.required' => 'The date field is required.']);
          
         // update the image in the public folder with the new one
         if($request->image){
             // check public folder for the file if exists to delete it 
             if(File::exists($testimonial->image)){
                 File::delete($testimonial->image);
             }
             $uniqueImageName =  time().'-'.$request->name. '.' .$request->image->extension();
             $request->image->move(public_path('uploads'), $uniqueImageName);
             $fields['image'] = 'uploads/' . $uniqueImageName;
         }
 
         $testimonial->update($fields);
         
         return redirect()->back()->with('success', 'Testimonial successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back()->with('success', 'Testimonial successfully deleted');
    }
}
