<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartProduct extends Component
{
    public $cartProduct;
    public $qty;
    public function updateCartContent(){
        $this->cartProduct = json_decode(json_encode($this->cartProduct),true);
    }
    public function mount(){
        $this->updateCartContent();
        $this->qty = $this->cartProduct['qty'];
    }
    public function render()
    {
        return view('livewire.cart-product');
    }
    public function updateItem($rowId){
        Cart::update($rowId,$this->qty);
        $this->emit('cartPayUpdate');
    }
    public function removeItem($rowId){
        Cart::remove($rowId);
        $this->emit('updateCartCount');
        $this->emit('cartPayUpdate');
        $this->emit('updateCartSpreaderContent');
    }
}
