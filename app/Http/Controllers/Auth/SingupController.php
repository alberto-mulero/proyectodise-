<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\User;

class SingupController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','string','max:20'],
            'email'=>['required','string','email','max:50','unique:users'],
            'password'=>['required','confirmed', Rules\Password::defaults()]
        ]);
        // $user=
            User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ]);
        // Auth::login($user);
        return to_route('enviar-mail', $request->email);
        return to_route('login')->with('status', 'Account Create!');
        // return view('index');
    }
}
