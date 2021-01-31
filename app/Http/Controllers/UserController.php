<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
    function login(request $req)
    {
        //dd($req->all());
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $user= User::where(['username'=>$req->username])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or Password is not matched!";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/admin'); 
        }
    }
}
