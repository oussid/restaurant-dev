<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|max:16',
            'image' => 'required|mimes:png,jpg,jpeg|max:5000',
        ]);

        $uniqueImageName =  time().'-'.$request->name. '.' .$request->image->extension();
        $request->image->move(public_path('uploads'), $uniqueImageName);
        $fields['image'] = 'uploads/' . $uniqueImageName;

        Category::create($fields);
        
        return redirect()->back()->with('success', 'Category created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // image is not required if it's already in the db
        $imageValidation;
        if($category->image){
            $imageValidation = 'mimes:png,jpg,jpeg|max:5000';
        }else{
            $imageValidation = 'required|mimes:png,jpg,jpeg|max:5000';
        }

        $fields = $request->validate([
            'name' => 'required|max:16',
            'image' => $imageValidation,
        ]);

        // update the image in the public folder with the new one
        if($request->image){
            // check public folder for the file if exists to delete it 
            if(File::exists($category->image)){
                File::delete($category->image);
            }
            $uniqueImageName =  time().'-'.$request->name. '.' .$request->image->extension();
            $request->image->move(public_path('uploads'), $uniqueImageName);
            $fields['image'] = 'uploads/' . $uniqueImageName;
        }

        $category->update($fields);
        
        return redirect()->back()->with('success', 'Category updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if(File::exists($category->image)){
            File::delete($category->image);
        }
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted');
    }
}
