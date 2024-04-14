<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    public function create_function
    (StoreUserRequest $request)
    {
        $request->validated();

        $password = Str::password();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password),
            ($password),
        ]);
    }
}

?>