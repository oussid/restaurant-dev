<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartProductsSpreader extends Component
{
    public $cartProducts;
    public $listeners = ['updateCartSpreaderContent'=>"updateCartSpreaderContent"];
    public function render()
    {
        return view('livewire.cart-products-spreader');
    }
    public function mount(){
        $this->updateCartSpreaderContent();
    }
    public function updateCartSpreaderContent(){
        $this->cartProducts = Cart::content();
    }
    public function emptyCart(){
        Cart::destroy();
        $this->updateCartSpreaderContent();
        $this->emit('cartPayUpdate');
        $this->emit('updateCartCount');
    }
}
