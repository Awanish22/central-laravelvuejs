<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function register(Request $req)
    {
       $user= new User;
       $user->name=$req->name;
       $user->email=$req->email;
       $user->password=$req->password=Hash::make($req->password);
       $user->save();
       return redirect('/login');
    }
}
