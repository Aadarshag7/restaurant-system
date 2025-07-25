<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
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

    ]);

    return redirect()->route('login');

}

public function login(){

return view ('auth.login');
}
 
public function loginAction(Request $request){
    $validation=$request->validate([
     'email'=>['required'],
     'password'=>['required']
    ]);
        
    
  if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email'=> trans('auth.failed')
            ]);
        }
        $request->session()->regenerate();

        return redirect()->route('about');
    }


 

}
