<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerPost(Request $request){
        $user = new User();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Use Hash::make for password hashing

        $user->save();

        return back()->with('success', 'Compte créé avec succès, connectez-vous');
    }

    public function login(){
        return view('login');
    }
    
    public function loginPost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if(Auth::attempt($credentials)){
            return redirect()->route('home')->with('success', 'Connexion réussie'); // Corrected route name
        }
        return back()->with('error', 'Email ou mot de passe incorrect');
    }  
}
