<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.product.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|max:16',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'description' => 'max:256',
            'image' => 'required|mimes:png,jpg,jpeg|max:5000',
        ], [
            'category_id.required' => 'The category field is required'
        ]);

        $uniqueImageName =  time().'-'.$request->name. '.' .$request->image->extension();
        $request->image->move(public_path('uploads'), $uniqueImageName);
        $fields['image'] = 'uploads/' . $uniqueImageName;

        Product::create($fields);
        
        return redirect()->back()->with('success', 'Product added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
         // image is not required if it's already in the db
         $imageValidation;
         if($product->image){
             $imageValidation = 'mimes:png,jpg,jpeg|max:5000';
         }else{
             $imageValidation = 'required|mimes:png,jpg,jpeg|max:5000';
         }
 
         $fields = $request->validate([
            'name' => 'required|max:16',
            'category_id' => 'required|max:16',
            'price' => 'required|numeric',
            'description' => 'max:256',
            'image' => $imageValidation,
         ]);
 
         // update the image in the public folder with the new one
         if($request->image){
             // check public folder for the file if exists to delete it 
             if(File::exists($product->image)){
                 File::delete($product->image);
             }
             $uniqueImageName =  time().'-'.$request->name. '.' .$request->image->extension();
             $request->image->move(public_path('uploads'), $uniqueImageName);
             $fields['image'] = 'uploads/' . $uniqueImageName;
         }
 
         $product->update($fields);
         
         return redirect()->back()->with('success', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if(File::exists($product->image)){
            File::delete($product->image);
        }

        $product->delete();
        return redirect()->back()->with('success', 'Product deleted');
    }
}
