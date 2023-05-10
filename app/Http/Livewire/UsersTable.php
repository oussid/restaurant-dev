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
    public $resourceName;
    public $actions = [];
    public $search;

    public function render()
    {
        return view('livewire.users-table', [
            // 'users' => User::where('users.role', $this->role)
            //                         ->where('id', 'like', '%'.$this->search.'%')
            //                         ->orWhere('name', 'like', '%'.$this->search.'%')
            //                         ->orWhere('email', 'like', '%'.$this->search.'%')
            //                         ->orWhere('mobile', 'like', '%'.$this->search.'%')
            //                         ->orderBy('users.id', 'desc')
            //                         ->paginate(10)
            'users' => User::where(function ($query) {
                $query->where('role',$this->role);

            })
            ->where(function ($query) {
                $query->where('id', 'like', '%'.$this->search.'%')
                    ->orWhere('name', 'like', '%'.$this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%')
                    ->orWhere('mobile', 'like', '%'.$this->search.'%');
            })
            ->orderBy('users.id', 'desc')
            ->paginate(10)
        ]);
    }
}
