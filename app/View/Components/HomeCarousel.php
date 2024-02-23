<?php

namespace App\View\Components;

use Closure;
use App\Models\Banner;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class HomeCarousel extends Component
{
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
        return view('components.home-carousel');
    }
}
