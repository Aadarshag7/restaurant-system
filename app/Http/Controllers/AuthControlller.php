<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthControlller extends Controller
{
    public function register(){
        return view('register');
    }
    
  
   



public function registerSave(Request $request){

    $validation=$request->validate([
        'name'=>['required'],
        'email'=>['required'],
        'password'=>['required']

    ]);

    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password)

    ])

}
