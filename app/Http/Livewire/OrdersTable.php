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
    public $statusMap = [
        0 => [
            'label'=>'Canceled',
            'class'=>'red',
        ],
        1 => [
            'label'=>'Preparing',
            'class'=>'purple',
        ],
        2 => [
            'label'=>'On the way',
            'class'=>'blue',
        ],
        3 => [
            'label'=>'Completed',
            'class'=>'green',
        ],
    ];

    
    public function updateStatus ($id, $status, $deliveryManId = null) {
        //1=>preparing, 2=>On the way, 3=>completed, 0=>canceled
        $order = Order::findOrFail($id);

        if($status == 1){
            $order->delivery_man_id = null;
            $order->status = 1;
            $order->save();
            return session()->flash('table-success', 'Status successfully updated.');
            
        }
        elseif($status == 2){
            $order->delivery_man_id = $deliveryManId;
            $order->status = 2;
            $order->save();
            return session()->flash('table-success', 'Status successfully updated.');
            
        }
        elseif($status == 3){
            $order->delivery_man_id = null;
            $order->status = 3;
            $order->save();
            return session()->flash('table-success', 'Status successfully updated.');

        }else{
            $order->delivery_man_id = null;
            $order->status = 0;
            $order->save();
            return session()->flash('table-success', 'Status successfully updated.');
        }

        dd('wrong');
    }
    
    public function render()
    {
        
        return view('livewire.orders-table', [
            'orders' => Order::where('orders.id', 'like', '%'.$this->search.'%')
            ->orWhere('order_number', 'like', '%'.$this->search.'%')
            ->orWhere('total', 'like', '%'.$this->search.'%')
            ->orWhere('users.name', 'like', '%'.$this->search.'%')
            ->leftJoin('users', 'orders.customer_id', '=', 'users.id')
            ->select('orders.id', 'orders.order_number', 'orders.created_at', 'orders.total', 'orders.status', 'users.name', 'users.email', 'users.mobile')
            ->paginate(10)
        ]);
    }
}
