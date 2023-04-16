<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard(){
        $orders = DB::table('orders')
            ->whereRaw('YEAR(order_date) = YEAR(CURRENT_DATE())')
            ->select(DB::raw('MONTH(order_date) as month'), DB::raw('count(*) as orders_count'))
            ->groupBy('month')
            ->get()
            ->toArray();
            // $orders = DB::table('orders')
            // ->select('month', DB::raw('COUNT(*) as count'))
            // ->groupBy('month')
            // ->get()
            // ->toArray();
            $earnings = DB::table('orders')
            ->whereRaw('YEAR(order_date) = YEAR(CURRENT_DATE())')
            ->select(DB::raw('MONTH(order_date) as month'), DB::raw('sum(total) as revenue'))
            ->groupBy('month')
            ->get()
            ->toArray();
            

        return view('adminDashboard', [
            'ordersChart'=>$orders,
            'earningsChart' => $earnings
        ]);
    }

    public function loginForm(){
        return view('adminLogin');
    }
}
