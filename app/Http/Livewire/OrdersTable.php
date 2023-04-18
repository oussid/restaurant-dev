<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrdersTable extends Component
{
    use WithPagination;

    public $search;

    public function test(){
        dd($this->search);
    }
    
    public function render()
    {
        ;
        return view('livewire.orders-table', [
            'orders' => Order::where('orders.id', 'like', '%'.$this->search.'%')
            ->orWhere('order_number', 'like', '%'.$this->search.'%')
            ->orWhere('total', 'like', '%'.$this->search.'%')
            ->orWhere('users.name', 'like', '%'.$this->search.'%')
            ->leftJoin('users', 'orders.user_id', '=', 'users.id')
            ->paginate(10)
        ]);
    }
}
