<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AssignDeliveryMan extends Component
{
    public $modalId;
    public $orderId;
    public $deliveryManId;

    protected $rules = [
        'deliveryManId' => 'required',
        
    ] ;

    public function save () {
        $this->validate();
        
        $order = Order::findOrFail($this->orderId);
        $order->update([
            'delivery_man_id' => $this->deliveryManId,
            'status' => 2
        ]);

        return redirect()->to(url()->previous())->with('success', 'Order ' . $order->order_number .  ' assigned to ' . $order->deliveryMan->name . '.');
        
    }

    
    
    
    public function render()
    {
        $orderNumber = DB::table('orders')
        ->where('id', $this->orderId)
        ->value('order_number');
        //   dd($order->order_number)  ;
    return view('livewire.assign-delivery-man', [
        'deliveryMen'=> User::where('role', 1)->get(),
        'orderNumber' => $orderNumber
    ]);
    }
}
