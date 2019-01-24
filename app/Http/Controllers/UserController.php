<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $password = $request->password;

        $check_login = Auth::attempt([
            'id' => $request->id, 'password' => $password
        ]);
        return (int)$check_login;
        if(Auth::attempt([ 'id' => $request->id, 'password' => $password ])){
            return Auth::check();
        }else{
            return 'no';
        }
    }

    public function logout()
    {
        Auth::logout();
        return 'logout good bye';
    }

    public function register(Request $request)
    {
        $password = Hash::make($request->password);
        \Log::debug('create', ['Step1'=>'Before User creation']);

        User::create([
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$password,
            'sex'=>$request->sex,
            'university'=>$request->university,
        ]);

        Auth::attempt([
            'id' =>$request->id,
            'password' =>$password
        ]);
        return 'sign up success';
    }

}
