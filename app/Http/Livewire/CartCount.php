<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartCount extends Component
{

    public $count;
    public $listeners = ["updateCartCount"=>"updateCartCount"];
    public function render()
    {
        return view('livewire.cart-count');
    }
    public function updateCartCount(){
        $this->count=Cart::content()->count();
    }
    public function mount(){
        $this->updateCartCount();
    }
}
