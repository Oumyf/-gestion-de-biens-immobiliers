<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function inscription(){
        return view('inscription');
    }
    public function inscriptionPost(Request $request){
       $user= new User ();
       $user->name=$request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);

       $user->save();

       return back()->with('success','inscription réussie');
        }

        public function connexion(){
            return view('connexion');
        }

        public function connexionPost(){
            $identifiants = [
                'email' => request('email'),
                'password' => request('password')
            ];

            if(Auth::attempt( $identifiants)){
                return redirect()->route('index')->with('success','Connexion réussie');
            }

            return back()->with('error', 'Email ou mot de passe incorrect');
        }

        public function deconnexion(){
            Auth::logout();

            return redirect()->route('connexion');

        }
}
