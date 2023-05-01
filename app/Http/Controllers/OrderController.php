<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Auth;
use Str;
use Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin.order.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = Order::create([
            "customer_id"=>Auth::user()->id,
            "order_number"=>uniqid('#'),
            "total"=>Cart::subtotal(),
            "delivery_type"=>$request->type
        ]);

        foreach(Cart::content()as $product){
            OrderProduct::create([
                "order_id"=>$order->id,
                "product_id"=>$product->id,
                "quantity" =>$product->qty
            ]);
        }
        Cart::destroy();
        return redirect()->back()->with('order_created','Order created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        dd($order->products);
        return view ('admin.order.show', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
    public function cancelOrder(Request $req){
        Order::where('id','=',$req->order_id)
                ->update(
                    [
                        "status"=> 0
                    ]
                );
        return redirect()->back()->with('success','Order canceled successfully');
    }
}
