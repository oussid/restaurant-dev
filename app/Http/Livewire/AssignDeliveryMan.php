<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Order;
use Livewire\Component;

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

        return redirect()->to(url()->previous())->with('success', 'Order #' . $order->id .  ' assigned to ' . $order->deliveryMan->name . '.');
        
    }
    
    
    public function render()
    {
    //   dd(User::find(1)->deliveryOrders())  ;
    return view('livewire.assign-delivery-man', [
        'deliveryMen'=> User::where('role', 1)->get(),
        'orderNumber' => $this->orderId,
    ]);
    }
}
