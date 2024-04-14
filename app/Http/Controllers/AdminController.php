<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
   // Displays the admin index page.
 public function index() {
        return view('admin.index');
    }
 public function login() {
        return view('admin.login');
    }
    
 public function checkLogin() {
    request()->validate([
        'email' => 'required|email|exists:users',
        'password' => 'required',
    ]);
        $data = request()->all('email','password');
        if (auth()->attempt($data)) {
            return redirect()->route('admin.index');
        }
        return redirect()->back();
    }

 public function register() {
        return view('admin.register');
    }

 public function checkRegister() {
    request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'confirm-password' => 'required|same:password',
    ]);
        $data = request()->all('email','name');
        $data['password'] = bcrypt(request('password'));
       User::create($data);
       return redirect()->route('admin.login');
    }
}
