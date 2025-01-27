<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;



class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request){
        $message = $request->validate([
            "name" => "required|string",
            "email" => "required|string|email |unique:users",
            "password" => "required|string| min:8",
        ]);

        $users = new User();
        $users -> name = $request->name;
        $users -> email = $request ->email;
        $users -> password = Hash::make($request-> password);
        // $users -> password = $request-> password;
        $users -> save();

        session()->flash('message', 'Cool, votre compte a été créer  avec succès. Connecter vous maintenant !');
        $username= $users->name;
        return view('login', compact('username'));
    }
}
