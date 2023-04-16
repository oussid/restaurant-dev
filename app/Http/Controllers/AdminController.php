<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(){
        $orders = DB::table('orders')
        ->select('month', DB::raw('COUNT(*) as count'))
        ->groupBy('month')
        ->get()
        ->toArray();
        // dd(json_encode($orders) ); 
        return view('adminDashboard', ['ordersChart'=>$orders]);
    }

    public function loginForm(){
        return view('adminLogin');
    }
}
