<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
}
