<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

class cartController extends Controller
{
    public function cartPage(){
        return view('cart');
    }
    public function cartBillContinue(Request $req){
        if(Auth::check()){
            return redirect()->back()->with('bill_continue','yeah');
        }
        else{
            return redirect('/login');
        }
    }
}
