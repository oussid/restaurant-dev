<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    public $role;
    public $title;
    public $emptyMessage;
    public $hasImageColumn = false;
    public $search;

    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::where('role', $this->role)
                                    ->where('name', 'like', '%'.$this->search.'%')
                                    ->orderBy('users.id', 'desc')
                                    ->paginate(10)
        ]);
    }
}
