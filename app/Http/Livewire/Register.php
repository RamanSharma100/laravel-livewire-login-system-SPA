<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    
    public $form = [
        'name'=>'',
        'password'=>'',
        'password_confirmation'=>'',
    ];
    public $email = '';


    public function render()
    {
        return view('livewire.register');
    }

    public function handleRegister()
    {
        $this->validate([
            "form.name"=>'required',
            "email"=> 'required|email|unique:users',
            "form.password"=> "required|min:8|confirmed:form.password_confirmation"
        ]);
       
        User::create([
            'name'=>$this->form['name'],
            'email'=>$this->email,
            'password'=>$this->form['password'], 
        ]);

        session()->flash('success', "You are registered successfully!");
        return redirect(route("login"));
    }
}