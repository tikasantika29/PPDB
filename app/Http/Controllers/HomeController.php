<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        if (Auth::user()->role == 'admin_disdik'){
            return view('admin.dashboard');
        }

        elseif (Auth::user()->role == 'admin_smp'){
            return view('adminsmp.index');
        }

        elseif (Auth::user()->role == 'admin_sd'){
            return view('adminsd.index');
        }
       
    }
}
