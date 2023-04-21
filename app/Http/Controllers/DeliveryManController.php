<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DeliveryManController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.delivery-man.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.delivery-man.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|max:32',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required | numeric | digits:10',
            'profile_pic' => 'required|mimes:png,jpg,jpeg|max:5000',
            'password' => 'required|confirmed',
        ], [
            'profile_pic.required' => 'The profile picture is required.',
            'profile_pic.mimes' => 'The profile picture must be of type png, jpg, jpeg.',
            'mobile.required' => 'The phone number is required.',
        ]);

        $fields['password'] = bcrypt($fields['password']);
        $fields['role'] = 1;

        $uniqueImageName =  time().'-'.$request->name. '.' .$request->profile_pic->extension();
        $request->profile_pic->move(public_path('uploads'), $uniqueImageName);
        $fields['profile_pic'] = 'uploads/' . $uniqueImageName;

        User::create($fields);
        
        return redirect()->back()->with('success', 'Delivery man added');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $delivery)
    {
        return view('admin.delivery-man.edit', [
            'deliveryMan'=> $delivery
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $delivery)
    {
        // image is not required if it's already in the db
        $imageValidation;
        if($delivery->profile_pic){
            $imageValidation = 'mimes:png,jpg,jpeg|max:5000';
        }else{
            $imageValidation = 'required|mimes:png,jpg,jpeg|max:5000';
        }

        $fields = $request->validate([
            'name' => 'required|max:16',
            'email' => 'required|email',
            'mobile' => 'required | numeric | digits:10',
            'profile_pic' => $imageValidation,
        ], [
            'profile_pic.required' => 'The profile picture is required.',
            'profile_pic.mimes' => 'The profile picture must be of type png, jpg, jpeg.',
            'mobile.required' => 'The phone number is required.',
        ]);

        // update the image in the public folder with the new one
        if($request->profile_pic){
            // check public folder for the old image if exists to delete it 
            if(File::exists($delivery->image)){
                File::delete($delivery->image);
            }
            $uniqueImageName =  time().'-'.$request->name. '.' .$request->profile_pic->extension();
            $request->profile_pic->move(public_path('uploads'), $uniqueImageName);
            $fields['profile_pic'] = 'uploads/' . $uniqueImageName;
        }
        
        $delivery->update($fields);
        
        return redirect()->back()->with('success', 'Delivery man updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $delivery)
    {
        if(File::exists($delivery->profile_pic)){
            File::delete($delivery->profile_pic);
        }
        $delivery->delete();
        return redirect()->back()->with('success', 'Delivery man deleted');
    }
}
