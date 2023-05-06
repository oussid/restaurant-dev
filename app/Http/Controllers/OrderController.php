<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Auth;
use Str;
use Cart;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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
        if($request->address ==null){
            $order = Order::create([
                "customer_id"=>Auth::user()->id,
                "order_number"=>uniqid('#'),
                "total"=>Cart::subtotal(),
                "delivery_type"=>$request->type
            ]);
        }
        else{
            $order = Order::create([
                "customer_id"=>Auth::user()->id,
                "order_number"=>uniqid('#'),
                "total"=>Cart::subtotal(),
                "address"=>$request->address,
                "delivery_type"=>$request->type
            ]);
        }

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

    public function updateStatus (Order $order, $status, $deliveryManId = null) {
        //1=>preparing, 2=>On the way, 3=>completed, 0=>canceled, -1=>placed
        if($status == 1){
            $order->delivery_man_id = null;
            $order->status = 1;
            $order->save();
            return session()->flash('success', 'Status successfully updated.');
        }
        elseif($status == 3){
            $order->delivery_man_id = null;
            $order->status = 3;
            $order->save();
            return session()->flash('success', 'Status successfully updated.');
            
        }
        elseif($status == 0){
            $order->delivery_man_id = null;
            $order->status = 0;
            $order->save();
            return session()->flash('success', 'Status successfully updated.');
        }
    }

    public function test () {
        return view('pdf');
    }

    // DOWNLOAD ORDER DETAILS IN PDF FORMAT
    public function print (Order $order) {
        // dd($order);
        $pdf = Pdf::loadView('pdf.order', compact('order'));
        return $pdf->download('order.pdf');
    }
}
