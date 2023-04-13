<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\TodaySpecials;
use DB;

class userController extends Controller
{
    public function index(){
       $categories = DB::table('categories')->get();
       $products =Product::take(3)->get();
       $sampleProducts =Product::skip(3)->take(4)->get();
       $todaySpecialProducts =Product::with('todaySpecials')->get();
        return view('index',[
            'categories'=> $categories,
            'products'=>$products,
            'sampleProducts'=>$sampleProducts,
            'todaySpecialProducts'=>$todaySpecialProducts
        ]);
    }
}
