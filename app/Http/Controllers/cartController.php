<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;

class cartController extends Controller
{
    public function cartPage(){
        return view('cart');
    }
    public function store(Request $req){
        $product = Product::where("id","=",$req->id)->first();
        Cart::add($product->id,$product->name,$req->quantity, $product->price,['image'=>$product->image]);
        return redirect()->back();
    }
    public function removeItem(Request $req){
        Cart::remove($req->rowId);
        return redirect()->back();
    }
}
