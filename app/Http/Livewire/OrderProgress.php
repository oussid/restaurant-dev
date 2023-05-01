<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderProgress extends Component
{
    public $order;
    
    public function render()
    {
        return view('livewire.order-progress');
    }
}
