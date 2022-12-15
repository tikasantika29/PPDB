<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
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
        else{
            return auth()->logout();
        }
    }
}
?>