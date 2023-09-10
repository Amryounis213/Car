<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //Login 
    public function Login()
    {
        return view('website.auth.signin');
    }

    //Register
    public function Register()
    {
        return view('website.auth.signup');
    }

    //Forgot Password
    public function ForgotPassword()
    {
        return view('website.auth.forgot');
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
            'phone' => 'required|exists:users,phone',
            'password' => 'required|string|min:8|max:255',
        ]);
        $remember = $request->remember ? true : false;
        if (auth()->attempt(['phone' => $request->phone, 'password' => $request->password], $remember)) {
           
            $intendedUrl = Session::get('intended_url');
            if (auth()->user()->email_verified_at == null) {
                // Session::put('user_id', $user->id);
                $user = User::where('phone', $request->phone)->first();
                Session::put('user_phone', $user->phone);
                Session::put('attempts', 2);
                // dd(auth()->user());
                return redirect()->route('website.verify');
            }
            // Redirect to intended URL or a default page
            return redirect()->intended($intendedUrl ?: '/');
            // return redirect()->route('website.home');
        }


        return redirect()->back()->with('error', 'Wrong credentials');
    }


    //POST Register
    public function PostRegister(Request $request)
    {
        $request->validate([
            'phone' => 'required|unique:users,phone',
            'username' => 'required|string|min:3|max:255|unique:users,username',
            'password' => 'required|string|min:8|max:255|confirmed',
        ]);
        $user = User::create([
            'username' => $request->username,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'code' => rand(1111, 1111),
        ]);
        // auth()->login($user);
        //STORE SESSION
        // Session::put('user_id', $user->id);
        Session::put('user_phone', $user->phone);
        Session::put('attempts', 2);
        return redirect()->route('website.verify');
    }

    //verify code view 
    public function verifyCodeView()
    {
        return view('website.auth.verify');
    }

    //verify code 
    public function verifyCode(Request $request)
    {

        Session::get('attempts') ? Session::put('attempts', Session::get('attempts') - 1) : 0;

        if (Session::get('attempts') == 0) {
            return redirect()->route('website.register')->with('error', 'You have exceeded the number of attempts');
        }

        $request->validate([
            'code' => 'required|numeric',
        ]);

        $request->merge([
            'code' => $request->code[0] . $request->code[1] . $request->code[2] . $request->code[3],
        ]);
        
        $user = User::where('phone', Session::get('user_phone'))->where('code', $request->code)->first();

        dd($user);
        if ($user) {
            $user->update([
                // 'code' => null,
                'status' => 1,
                'email_verified_at' => now(),
            ]);
            auth()->login($user);
            return redirect()->route('website.home');
        }
        return redirect()->back()->with('error', 'Wrong code');
    }
}
