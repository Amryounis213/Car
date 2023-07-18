<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Login 
    public function Login()
    {
        return view('website.auth.login');
    }

    //Register
    public function Register()
    {
        return view('website.auth.register');
    }

    //Forgot Password
    public function ForgotPassword()
    {
        return view('website.auth.forgot-password');
    }

    //Reset Password
    public function ResetPassword()
    {
        return view('website.auth.reset-password');
    }

    //Logout
    public function Logout()
    {
        auth()->logout();
        return redirect()->route('website.home');
    }

    //POST Login
    public function PostLogin(Request $request)
    {
        $request->validate([
            'phone' => 'required|phone|exists:users,phone',
            'password' => 'required|string|min:8|max:255',
        ]);
        $remember = $request->remember ? true : false;
        if (auth()->attempt(['phone' => $request->phone, 'password' => $request->password], $remember)) {
            return redirect()->route('website.home');
        }


        return redirect()->back()->with('error', 'Wrong credentials');
    }


    //POST Register
    public function PostRegister(Request $request)
    {
        $request->validate([
            'phone' => 'required|phone|unique:users,phone',
            'user_name' => 'required|string|min:3|max:255|unique:users,user_name',
            'password' => 'required|string|min:8|max:255|confirmed',
        ]);
        $user = \App\Models\User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => strtolower($request->email),
            'password' => bcrypt($request->password),
            'code' => rand(1111, 9999),
        ]);
        auth()->login($user);
        return redirect()->route('website.home');
    }


    
}
