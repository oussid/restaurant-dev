<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderProgress extends Component
{
    public $status = 0;
    public function render()
    {
        return view('livewire.order-progress');
    }
}
