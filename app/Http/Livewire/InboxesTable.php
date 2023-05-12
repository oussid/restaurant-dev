<?php

namespace App\Http\Livewire;

use App\Models\Inbox;
use Livewire\Component;
use Livewire\WithPagination;

class InboxesTable extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        return view('livewire.inboxes-table', [
            'inboxes' => Inbox::where('id', 'like', '%'.$this->search.'%')
                                    ->orWhere('first_name', 'like', '%'.$this->search.'%')
                                    ->orWhere('last_name', 'like', '%'.$this->search.'%')
                                    ->orWhere('email', 'like', '%'.$this->search.'%')
                                    ->orWhere('message', 'like', '%'.$this->search.'%')
                                    ->orderBy('inboxes.id', 'desc')
                                    ->paginate(10)
        ]);
    }
}
