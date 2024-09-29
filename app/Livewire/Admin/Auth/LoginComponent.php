<?php

namespace App\Livewire\Admin\Auth;

use App\Http\Requests\Admin\Login\LoginRequest;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LoginComponent extends Component
{
    public $email;
    public $password;
    public $remember;

    public function render()
    {
        return view('admin.auth.login-component');
    }
    public function submit()
    {
        $this->validate((new LoginRequest())->rules());
        if(!auth()->guard('admin')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            throw ValidationException::withMessages([
                'email' => "These credentials do not match our records.",
            ]);
        }
        return redirect()->route('admin.dashboard');
    }
}
