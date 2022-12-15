<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\Type\TrueType;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index()
    {
        // if ($user = Auth::user()) {
        //     if ($user->level == 'admin') {
        //         return redirect()->intended('admin');
        //     } elseif ($user->level == 'siswa') {
        //         return redirect()->intended('siswa');
        //     }
        // }
        return view('auth. login');
    }

    public function login(Request $request){

       if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('dashboard');
       }
       return redirect('/')->with('message', 'Email atau Password Salah');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

        $kredensil = $request->only('username','password');

       
            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->role == 'admin_disdik') {
                    return redirect()->intended('admin_disdik');
                } elseif ($user->role == 'admin_smp') {
                    return redirect()->intended('admin_smp');
                } elseif($user->role == 'admin_sd'){
                    return redirect()->intended('admin_sd');
                }
                return redirect('dashboard')->with('success', 'Selamat Datang!');
            }

            
        return redirect('login')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       toast('Berhasil Logout', 'success');
       return Redirect('login');
    }

    // public function store(Request $request){
    //     $validation = $request->email([
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);
    //     $email = $request->email;
    //     $password = md5($request->password);
    //     $cek_user = DB::table('users')->where('email', $email)->where('password', $password)->get();
    //     if(count($cek_user) > 0){
    //         if($cek_user[0]->active == 0){
    //             return redirect('/')->with(['gagal1' => "Akun sudah tidak aktif"]);
    //         }
    //         else{
    //             $request->session()->put('id', $cek_user[0]->id);
    //             $request->session()->put('name', $cek_user[0]->name);
    //             $request->session()->put('email', $cek_user[0]->email);
    //             $request->session()->put('role', $cek_user[0]->role);
    //             $request->session()->put('is_login', TRUE);
    //             return redirect('dashboard')->with(['success' => "Login Berhasil!"]);
    //         }
    //         return redirect('/')->with(['gagal' => "Email/Password Salah!"]);
    //     }

    // }
}