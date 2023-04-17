<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\TodaySpecials;
use App\Models\Booking;
use App\Models\Table;
use DB;
use Auth;
use Carbon\Carbon;

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
        $user = User::where('email','=',$req->email)->first();
        Auth::login($user);

        return redirect()->back()->with('success','Registered Successfully');
    }
    public function loginPage(){
        return view('login');
    }
    public function login(Request $req){
        $isAuthenticated=Auth::attempt(['email' => $req->email, 'password' => $req->password]);
        if($isAuthenticated){
            $user = User::where('email','=',$req->email)->first();
            Auth::login($user);
            return redirect('/');
        }
        else{
            if(User::where('email','=',$req->email)->count()==1){
                return redirect()->back()->with("incorrectP","Password incorrect");
            }else{
                return redirect()->back()->with("noAcc","Account doesn't exist");;
            }
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function bookingPage(){
        return view('booking');
    }
    public function booking(Request $req){
        $req->validate([
            "date"=>"required",
            "time"=>"required|date_format:H:i|after:09:00",
            "n_guests"=>"required|min:1|max:10",
            "booking_type"=>"required",
            "name"=>"required",
            "email"=>"required|email",
            "mobile"=>"required|numeric|digits:10"
        ]);
        $time = $req->time; // get the value of the input using the request object
        $maxTime = Carbon::parse($time)->addHours('3'); // parse the input value as a Carbon object and add 1 hour
        $maxTime = $maxTime->format('H:i');//changing time format
        $table=null;
        if($table==null){
            return redirect()->back()->with('error','No tables are available during this date and time');
        }
        else{
            Booking::create([
                "table_id"=>$table->id,
                "booking_date"=>$req->date,
                "booking_time"=>$req->time,
                "booking_type"=>$req->booking_type,
                "guests_number"=>$req->n_guests,
                "contact_name"=>$req->name,
                "contact_email"=>$req->email,
                "contact_mobile"=>$req->mobile,
                "special_request"=>$req->special_r
            ]);
        }
    }
}
