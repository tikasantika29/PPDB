<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public function showResetForm(Request $request, $token = null)
    {
        $token = $request->token;

        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    protected function redirectTo(){
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
