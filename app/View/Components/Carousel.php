<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Carousel extends Component
{
    /**
     * Create a new component instance.
     */
    public $slides = [ 
        [
            'title'=>'Stay Home & Delivered Your Foods',
            'subtitle' => 'Flat 20% Discount',
            'image' => 'images/slide1.jpg',
            'button' => [  // equals to null if it does not exist
                'text' => 'Explore',
                'url' => '#',
            ]
        ]
    ];
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel');
    }
}
