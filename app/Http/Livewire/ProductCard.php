<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;


class ProductCard extends Component
{
    public $productCard;
    public $quantity=1;
    public $isAdded = false;
    public function updateCartAdded(){
        foreach(Cart::content() as $product){
            if($product->id == $this->productCard->id){
                $this->isAdded = true;
            }
        }
    }
    public function mount(){
        $this->updateCartAdded();
    }

    public function render()
    {
        return view('livewire.product-card');
    }
    public function addToCart($product_id){
        $prd = Product::where("id",'=',$product_id)->first();
        Cart::add($prd->id,$prd->name,$this->quantity, $prd->price,['image'=>$prd->image,'description'=>$prd->description]);
        $this->emit("updateCartCount");
        $this->updateCartAdded();

    }
}
