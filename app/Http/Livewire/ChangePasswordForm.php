<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordForm extends Component
{
    public $password;
    public $newPassword;
    public $newPasswordConfirmation;

    protected $rules = [
        'password' => 'required',
        'newPassword' => 'required|min:8|max:32|same:newPasswordConfirmation', 
        'newPasswordConfirmation' => 'required|min:8|max:32', 
    ];

    protected $messages = [
        'newPassword.same' => "Passwords don't match."
    ];

    public function save() {
        $this->validate();
        
        // check if the password is correct
        $user = Auth::user();
        if(!Hash::check($this->password, $user->password)){
            return redirect()->to(url()->previous())->with('error', 'Wrong Password');
        }; 

        
        $user->update([
            'password' =>Hash::make($this->newPassword),
        ]);

        
        return redirect()->to(url()->previous())->with('success', 'Password successfully changed');
    }

    public function render()
    {
        return view('livewire.change-password-form');
    }
}
