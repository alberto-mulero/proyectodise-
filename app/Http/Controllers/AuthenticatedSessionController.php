<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request){
    
       $credentials = $request->validate([
            'email'=>['required','string','email'],
            'password' => ['required','string']
        ]);
        
        // if ( ! Auth::attempt($credentials,$request->boolean('remember'))){
        //     throw ValidationException::withMessages([
        //         'email' => 'El email es incorrecto'
        //     ]);
        // }

        // $request->session()->regenerate();
        // return redirect('index');
        
        
        if (Auth::attempt($credentials,$request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect('index');
        }else{
            $user = User::where('email', $request->email)->first();
            if ($user==null) {
                return redirect()->route('login')->withErrors(['email'=>'El correo no esta en la base de datos']);
            }else{
                return redirect()->route('login')->withErrors(['password'=>'La contraseña no es correcta']);
            }
        }
        
        
        // $usuario = User::where('email',$request->email)->get();
        
        // if($usuario[0]->is_admin){
        //     return to_route('sesionadmin');
        // }else{
        //     return to_route('sesionuser');
        // }
    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login')->with('status','Has cerrado sesion');


    }
}
