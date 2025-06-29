<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $validate = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

       $user = User::create($validate);

        Auth::login($user);

        return redirect('/');
    }
}
