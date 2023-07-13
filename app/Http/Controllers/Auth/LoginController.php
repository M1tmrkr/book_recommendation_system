<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    // https://laracasts.com/discuss/channels/laravel/login-redirect-not-working-with-laravel-7
    // https://laracasts.com/discuss/channels/laravel/login-redirect-not-working-with-laravel-7
    protected function redirectTo()
    {
        //User Role
        $role = Auth::user()->role;
        //Check Role
        if($role == 'user'){
            session()->flash('alert-success', 'Welcome, '. Auth::user()->name .'! You are Logged In.');
           return route('user.index');

        } elseif($role == 'admin') {
            session()->flash('alert-success', 'Welcome, '. Auth::user()->name .'! You are Logged into the Admin Dashboard.');
            return route('admin.index');
        }
        elseif($role == 'superadmin') {
            session()->flash('alert-success', 'Welcome, '. Auth::user()->name .'! You are Logged into the Super Admin Dashboard.');
            return route('superadmin.index');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
