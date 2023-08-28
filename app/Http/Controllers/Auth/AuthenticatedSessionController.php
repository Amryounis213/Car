<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AuthenticatedSessionController extends Controller
{

    const GUARD = 'admin';
    
    public $guard = 'admin' ;

    public function __construct(Request $request)
    {
        if ($request->is('admin/*')) 
           return  $this->guard = 'admin' ;
        else
            return $this->guard = 'web' ;
    }
   


    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        if($this->guard == 'admin')
        {
            return view('admin.Auth.login' , ['route' => route('admin.login') ] );
        }
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {

        $request->guard = $this->guard;
        $request->authenticate();
        $request->session()->regenerate();


        if ($this->guard == 'admin') {
            return redirect()->route('dashboard');
        } else if ($this->guard == 'agent') {
            return redirect()->route('agent.dashboard');
        }

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {

        Auth::guard($this->guard)->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
