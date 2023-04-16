<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\TodaySpecials;
use DB;
use Auth;

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

    public function signupPage(){
        return view('signup');
    }

    public function signup(Request $req){
        $req->validate([
            "name"=>"required|min:2",
            "email"=>"required|email|unique:users,email",
            "mobile"=>"required|numeric|digits:10|unique:users,mobile",
            "password"=>"required|min:5",
            "c_password"=>"required|same:password",
            "terms"=>"accepted"
        ],[
            'c_password.required'=>'The password confirmation is required',
            'c_password.same'=>"password confirmation does't match",
            'mobile.numeric'=>"must be a valid phone number"
        ]);

        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'mobile'=>$req->mobile,
            'password'=>bcrypt($req->password)
        ]);
        


        return redirect()->back()->with('success','Registered Successfully');
    }
    public function loginPage(){
        return view('login');
    }
    public function login(Request $req){
        $isAuthenticated=Auth::attempt(['email' => $req->email, 'password' => $req->password]);
        if($isAuthenticated){
            return abort(400,'Credentials are correct');
        }
        else{
            if(User::where('email','=',$req->email)->count()==1){
                return redirect()->back()->with("incorrectP","Password incorrect");
            }else{
                return redirect()->back()->with("noAcc","Account doesn't exist");;
            }
        }
    }
}
