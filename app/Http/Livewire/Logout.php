<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.logout');
    }

    public function handleLogout()
    {
        auth()->logout();
        session()->flash('success', "you are loggedout Successfully!");
        return redirect(route('login'));
    }
}