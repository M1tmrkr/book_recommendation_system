<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function superadmin()
    {
        return view('home');
    }


    public function admin()
    {
        return view('home');
    }


    public function user()
    {
        return view('home');
    }


    public function index()
    {
        return redirect()->route(request()->user()->role);
    }
}
