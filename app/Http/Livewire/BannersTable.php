<?php

namespace App\Http\Livewire;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithPagination;

class BannersTable extends Component
{
    public $search;
    use WithPagination;

    public function render()
    {
        return view('livewire.banners-table', [
            'banners' => Banner::where('id', 'like', '%'.$this->search.'%')
                                    ->orWhere('title', 'like', '%'.$this->search.'%')
                                    ->orderBy('banners.id', 'desc')
                                    ->paginate(10)
        ]);
    }
}
