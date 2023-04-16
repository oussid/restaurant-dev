<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DoughnutChart extends Component
{
    public $orders ;

    public function __construct($orders)
    {
        $this->orders = $orders;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.doughnut-chart');
    }
}
