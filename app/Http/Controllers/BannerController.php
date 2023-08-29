<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
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
        return view('admin.banner.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if either cta button or cta url or both are specified, the fields are required
        $ctaValidation = ($request->cta_button || $request->cta_url) ? 'required|' : '';
        // dd($ctaValidation);

        $fields = $request->validate([
            'title' => 'required|max:64',
            'subtitle' => 'max:64',
            'cta_button' => $ctaValidation.'max:32',
            'cta_url' => $ctaValidation.'max:256',
            'image' => 'required|mimes:png,jpg,jpeg|max:5000',
        ], [
            'cta_button.required' => 'Please fill this field or leave both CTA Button & CTA URL empty.',
            'cta_url.required' => 'Please fill this field or leave both CTA Button & CTA URL empty.',
        ]);

        $uniqueImageName =  time().'-'.$request->title. '.' .$request->image->extension();
        $request->image->move(public_path('uploads'), $uniqueImageName);
        $fields['image'] = 'uploads/' . $uniqueImageName;

        Banner::create($fields);
        
        return redirect()->back()->with('success', 'Banner successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        
        return view('admin.banner.edit', ['banner' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        // if either cta button or cta url or both are specified, the fields are required
        $ctaValidation = ($request->cta_button || $request->cta_url) ? 'required|' : '';
        // image is not required if it's already in the db
        $imageValidation;
        if($banner->image){
            $imageValidation = 'mimes:png,jpg,jpeg|max:5000';
        }else{
            $imageValidation = 'required|mimes:png,jpg,jpeg|max:5000';
        }

        $fields = $request->validate([
            'title' => 'required|max:64',
            'subtitle' => 'max:64',
            'cta_button' => $ctaValidation.'max:32',
            'cta_url' => $ctaValidation.'max:256',
            'image' => $imageValidation,
        ], [
            'cta_button.required' => 'Please fill this field or leave both CTA Button & CTA URL empty.',
            'cta_url.required' => 'Please fill this field or leave both CTA Button & CTA URL empty.',
        ]);

        // update the image in the public folder with the new one
        if($request->image){
            // check public folder for the file if exists to delete it 
            if(File::exists($banner->image)){
                File::delete($banner->image);
            }
            $uniqueImageName =  time().'-'.$request->name. '.' .$request->image->extension();
            $request->image->move(public_path('uploads'), $uniqueImageName);
            $fields['image'] = 'uploads/' . $uniqueImageName;
        }

        $banner->update($fields);
        
        return redirect()->back()->with('success', 'Banner successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        if(File::exists($banner->image)){
            File::delete($banner->image);
        }

        $banner->delete();
        return redirect()->back()->with('success', 'Banner successfully deleted');
    }
}
