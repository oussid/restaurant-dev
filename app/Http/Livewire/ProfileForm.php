<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProfileForm extends Component
{
    use WithFileUploads;
    public $name;
    public $mobile;
    public $email;
    public $image;
    public $imageName;
    public $tempImage;
    public $imageDeleted = false; //bool
    public $modalId;

    protected $middleware = ['demo' => ['only' => ['save']]];
    
    
    function mount(){
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->mobile = Auth::user()->mobile;
        $this->imageName = Auth::user()->profile_pic;
    }

    protected $rules = [
        'name' => 'required|max:16',
        'email' => 'required|email',
        'mobile' => 'max:10' ,  
        'image' => 'image|nullable ' ,  
    ];

    public function updatedImage()
    {
       $this->tempImage = $this->image->temporaryUrl();
       
    }   

    public function deleteImage () {
        $this->tempImage = 'images/profile_placeholder.jpg';
        $this->image = null;
        $this->imageName = null;
        $this->imageDeleted = true;
    }

    public function save() {
        if(env('APP_DEMO_MODE')){
            return redirect()->to(url()->previous())->with('error', "You can't perform this action on demo mode.");
        }
        $this->validate();
        // if the user uploaded a photo and saved remove the old photo from the public folder and update it with the new 1
        if($this->image){
            if(File::exists(Auth::user()->profile_pic)){
                File::delete(Auth::user()->profile_pic);
            }
            $this->imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('uploads', $this->imageName, 'real_public');
        }

        // if the user deleted the preview image and submitted then remove the photo from the public folder
        if($this->imageDeleted){
            if(File::exists(Auth::user()->profile_pic)){
                File::delete(Auth::user()->profile_pic);
            }
        }

        // save user's profile info in db
        Auth::user()->update([
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'profile_pic' => $this->image ? 'uploads/' . $this->imageName : $this->imageName,
        ]);

        
        $this->clear();
        return redirect()->to(url()->previous())->with('success', 'Profile successfully updated');
    }

    public function clear (){
        $this->reset();
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->mobile = Auth::user()->mobile;
    }


    public function render()
    {
        return view('livewire.profile-form');
    }
}
