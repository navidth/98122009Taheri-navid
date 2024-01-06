<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function save_user(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('home');
    }
    public function login()
    {
        //User is login
        if(Auth::check())
        {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }
    public function login_user(Request $request)
    {
        $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('dashboard');
        }
        return redirect()->route('loginview');


    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('loginview');
    }
}
