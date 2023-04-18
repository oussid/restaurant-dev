<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        $ordersForChart = DB::table('orders')
            ->whereRaw('YEAR(created_at) = YEAR(CURRENT_DATE())')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('count(*) as orders_count'))
            ->groupBy('month')
            ->get()
            ->toArray();

            $earningsForChart = DB::table('orders')
            ->whereRaw('YEAR(created_at) = YEAR(CURRENT_DATE())')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('sum(total) as revenue'))
            ->groupBy('month')
            ->get()
            ->toArray();

            
            

        return view('adminDashboard', [
            'ordersChart'=>$ordersForChart,
            'earningsChart' => $earningsForChart
        ]);
    }

    public function loginForm(){
        return view('adminLogin');
    }

    public function signupForm () {
        return view('adminSignup');
    }
    
    // SIGNUP
    public function signup (Request $request) {
        $data = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|confirmed',
        ]);

        $user = User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> bcrypt($data['password']) ,
            'role'=> 2,
        ]);
        
        $token = $user->createToken('admin_token', ['everything']);
        $user->save();

        // dd(Auth::user());
        Auth::login($user); 
        return redirect('/admin');
        
    }

    // LOGIN
    public function login (Request $request) {
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        if (Auth::attempt($credentials)){
            $user = Auth::user();
            // check if the user is an admin
            if($user->role == 2){
                return redirect('/admin')->with('message', 'Logged in successfully');
            }else{
                return redirect('/');
            }
            
        }else{
            return redirect()->back()->with('error', 'Wrong email address or password');
        }
    }

    // LOGOUT
    public function logout (Request $request) {
        if (Auth::user()){
            Auth::logout();
            return redirect('/admin/login');
        }
        return redirect('/');
    }
}
