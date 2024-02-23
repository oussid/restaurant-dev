<?php

namespace App\View\Components;

use Closure;
use App\Models\Banner;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Carousel extends Component
{
    /**
     * Create a new component instance.
     */
    public $slides = [ 
        [
            'title'=>'Stay Home & Get Your Food Delivered',
            'subtitle' => 'Flat 20% Discount',
            'image' => 'images/slide1.jpg',
            'button' => [  // equals to null if it does not exist
                'text' => 'Explore',
                'url' => '#',
            ]
        ]
    ];
    public $banners;

    public function __construct()
    {
        $this->banners = Banner::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel', ['banners'=>$this->banners]);
    }
}
