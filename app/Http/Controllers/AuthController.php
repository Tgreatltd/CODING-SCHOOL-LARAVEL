<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\NotEmptyOrNull;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function profile($name=null, $age=null){
  return view('dashboard', ['name'=>$name, 'age'=>$age]);
    }

    function register(){
      return view('register');
    }
    function signup(Request $request){
    //   $data =$request->validate([
    //     'firstname'=> 'required|string',
    //     'surname'=> 'required|string',
    //     'email'=> 'required|string|email|unique:users',
    //     'password'=> 'required|string',
    //     'phonenumber'=> 'required|string',
    // ]);
    $data = $request->validate([
      'firstname' => ['required', 'string', new NotEmptyOrNull],
      'surname'=> ['required', 'string', new NotEmptyOrNull],
        'email'=> ['required', 'string','email', 'unique:users', new NotEmptyOrNull],
        'password'=> ['required', 'string', new NotEmptyOrNull],
        'phonenumber'=> ['required', 'string', new NotEmptyOrNull],
     
  ]);

 User::create($data);
    }
}
