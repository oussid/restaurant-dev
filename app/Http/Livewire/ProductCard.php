<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;


class ProductCard extends Component
{
    public $productCard;
    public $quantity=1;
    public function render()
    {
        return view('livewire.product-card');
    }
    public function addToCart($product_id){
        $prd = Product::where("id",'=',$product_id)->first();
        Cart::add($prd->id,$prd->name,$this->quantity, $prd->price,['image'=>$prd->image]);
        $this->emit("updateCartCount");
    }
}
