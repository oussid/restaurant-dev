<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Bill extends Component
{
    public $subtotal;
    public $cartCount;
    public $listeners = ["cartPayUpdate","cartPayUpdate"];

    public function cartPayUpdate(){
        $this->subtotal = Cart::subtotal();
        $this->cartCount = Cart::content()->count();
    }
    public function mount(){
        $this->cartPayUpdate();
    }
    public function render()
    {
        return view('livewire.bill');
    }
}
