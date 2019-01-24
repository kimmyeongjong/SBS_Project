<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $password = $request->password;
        $test = Hash::make($request->password);
        if(Auth::attempt([ 'id' => $request->id, 'password' => $test ])){
            return 'ok';
        }else{
            return 'no';
        }
    }
}
