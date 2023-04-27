<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartProduct extends Component
{
    public $cartProducts;
    public $qty;
    public function updateCartContent(){
        $this->cartProducts = Cart::content() ;
    }
    public function mount(){
        $this->updateCartContent();
    }
    public function render()
    {
        return view('livewire.cart-product',['cartProducts'=>$this->cartProducts]);
    }
    public function updateItem($rowId){
        Cart::update($rowId,$this->qty);
        $this->emit('updateCartCount');
        $this->emit('cartPayUpdate');
        $this->updateCartContent();
    }
    public function removeItem($rowId){
        Cart::remove($rowId);
        $this->emit('updateCartCount');
        $this->emit('cartPayUpdate');
        $this->updateCartContent();
    }
}
