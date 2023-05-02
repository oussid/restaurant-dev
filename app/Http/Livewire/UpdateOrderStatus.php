<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class UpdateOrderStatus extends Component
{
    public $order;
    public function updateStatus ($id, $status, $deliveryManId = null) {
        //1=>preparing, 2=>On the way, 3=>completed, 0=>canceled
        $order = Order::findOrFail($id);
        if($status == 1){
            $order->delivery_man_id = null;
            $order->status = 1;
            $order->save();
            return redirect()->to(url()->previous())->with('success', 'Status successfully updated');
        }

        elseif($status == 3){
            $order->delivery_man_id = null;
            $order->status = 3;
            $order->save();
            return redirect()->to(url()->previous())->with('success', 'Status successfully updated');
        }

        elseif($status == 0){
            $order->delivery_man_id = null;
            $order->status = 0;
            $order->save();
            return redirect()->to(url()->previous())->with('success', 'Status successfully updated');
        }   
    }

    public function render()
    {
        return view('livewire.update-order-status');
    }
}
