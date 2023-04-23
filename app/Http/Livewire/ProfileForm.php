<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileForm extends Component
{
    use WithFileUploads;
    public $name;
    public $mobile;
    public $email;
    public $image;
    public $tempImage;
    
    function mount(){
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->mobile = Auth::user()->mobile;
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
    }

    public function save() {
        $this->validate();
        $path = null;
        if($this->image){
            $path = $this->image->store('uploads', 'public');
            $oldPic = Auth::user()->profile_pic;
            if(Storage::exists('public/'.$oldPic)){
                Storage::delete('public/'.$oldPic);
            } 
        }

        Auth::user()->update([
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'profile_pic' => $path,
        ]);

        
        $this->clear();
        return redirect()->route('admin.dashboard')->with('success', 'Profile successfully updated');
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
