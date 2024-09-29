<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
   public function login()
   {
       return view('admin.auth.login');
   }
   public function logout()
   {
       auth()->guard('admin')->logout();
       return redirect()->route('admin.login');
   }
}
