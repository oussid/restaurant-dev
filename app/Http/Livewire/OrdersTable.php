<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrdersTable extends Component
{
    use WithPagination;
    public $search;
    public $title;
    public $orderId = 0;
    public $customer = null;
    protected $listeners = ['updateStatus' => 'updateStatus'];


    public function convertStatus ($status) {
        if($status == 0){
            return ['label' => 'Canceled', 'class' => 'red'];
        }
        elseif($status == 1){
            return ['label' => 'Preparing', 'class' => 'purple'];
        }
        elseif($status == 2){
            return ['label' => 'On the way', 'class' => 'blue'];
        }
        elseif($status == 3){
            return ['label' => 'Completed', 'class' => 'green'];
        }
        else{
            return ['label' => 'Placed', 'class' => 'gray'];
        }
    }

    public function updateStatus ($id, $status, $deliveryManId = null) {
        //1=>preparing, 2=>On the way, 3=>completed, 0=>canceled
        $order = Order::findOrFail($id);
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

    public function showModal ($modalId, $orderId) {
        $this->orderId = $orderId;
        $this->dispatchBrowserEvent('livewire-show-modal', ['modalId' => $modalId]);
    }

    public function test () {
        dd('test');
    }
    
    public function render()
    {
        if($this->customer){
            return view('livewire.orders-table', [
                'orders' => Order::where(function ($query) {
                    $query->where('customer_id', $this->customer->id);

                })
                ->where(function ($query) {
                    $query->where('order_number', 'like', '%'.$this->search.'%')
                    ->orWhere('order_number', 'like', '%'.$this->search.'%')
                    ->orWhere('total', 'like', '%'.$this->search.'%')
                    ->orWhere('users.name', 'like', '%'.$this->search.'%');
                })
                ->leftJoin('users', 'orders.customer_id', '=', 'users.id')
                ->select('orders.id', 'orders.order_number', 'orders.created_at', 'orders.total', 'orders.status', 'orders.delivery_type','users.name', 'users.email', 'users.mobile')
                ->paginate(10)
            ]);
        }
        return view('livewire.orders-table', ['orders' => Order::where('orders.id', 'like', '%'.$this->search.'%')
        ->orWhere('order_number', 'like', '%'.$this->search.'%')
        ->orWhere('total', 'like', '%'.$this->search.'%')
        ->orWhere('users.name', 'like', '%'.$this->search.'%')
        ->leftJoin('users', 'orders.customer_id', '=', 'users.id')
        ->select('orders.id', 'orders.order_number', 'orders.created_at', 'orders.total', 'orders.status', 'orders.delivery_type','users.name', 'users.email', 'users.mobile')
        ->orderBy('orders.id', 'desc')
        ->paginate(10)]);
    }
}
