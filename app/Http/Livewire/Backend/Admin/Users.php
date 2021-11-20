<?php

namespace App\Http\Livewire\Backend\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;




    public function render()
    {


        return view('livewire.backend.admin.users');
    }
}
